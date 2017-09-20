<?php

namespace CodingAvenue\LabadoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class BookCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('book')
            ->setDescription('...')
            ->addArgument('booking_request_id', InputArgument::OPTIONAL, 'BookingRequest ID');
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $booking_request_id = $input->getArgument('booking_request_id');

        $output->writeln('Command result.');
    }

}
