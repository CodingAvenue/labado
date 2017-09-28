<?php

namespace CodingAvenue\LabadoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use CodingAvenue\LabadoSystemBundle\Repository\LabadoerRepository;
use CodingAvenue\LabadoSystemBundle\Document\BookingRequest;
use CodingAvenue\LabadoSystemBundle\Document\Booking;
use CodingAvenue\LabadoSystemBundle\Document\Labadoer;
use CodingAvenue\LabadoSystemBundle\Document\User;
use DateTime;

class BookCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('book')
            ->setDescription('This command will do the actual booking of the user.')
            ->addArgument('booking_request_id', InputArgument::OPTIONAL, 'BookingRequest ID');
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $booking_request_id = $input->getArgument('booking_request_id');
        
        $em = $this->getContainer()->get('doctrine_mongodb')->getManager();
        $booking_request = $em->getRepository(BookingRequest::class)->find($booking_request_id);

        $booking_request->setStatus(BookingRequest::STATUS_IN_PROGRESS);

        $repository = $em->getRepository(Labadoer::class);
        $coords = $booking_request->getUser()->getCoordinates();
        $labadoer = $repository->findOneNearby($coords);

        if ($labadoer == null) {
            $booking_request->setStatus(BookingRequest::STATUS_NO_LABADOER);
        } else {
            $booking = new Booking(); 
            $booking->setBookedAt(new DateTime());
            $booking->setLabadoer($labadoer);
            $booking->setUser($booking_request->getUser());

            $services = $booking_request->getStandardServiceMatrix();
            foreach ($services as $service) {
                $booking->addStandardServiceMatrix($service);
            }

            $booking->setLaundryShop($booking_request->getLaundryShop());
            $booking->setStatus(Booking::STATUS_IN_PROGRESS);

            $booking_request->setStatus(BookingRequest::STATUS_CONFIRMED);
        }
        
        $em->flush();
        $output->writeln('Booking successful.');
    }

}