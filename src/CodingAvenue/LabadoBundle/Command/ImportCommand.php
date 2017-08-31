<?php

namespace CodingAvenue\LabadoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use CodingAvenue\LabadoBundle\Entity\LaundryShop;

class ImportCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('import')
            ->setDescription('...')
            ->addArgument('path', InputArgument::OPTIONAL, 'Path to the import file')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $path = $input->getArgument('path');
        $laundry_data = file($path);

        $em = $this->getContainer()->get('doctrine')->getEntityManager();
        foreach($laundry_data as $list){
            $data = json_decode($list);

            $laundry = new LaundryShop();         
            $laundry->setName($data->name);
            $laundry->setAddress($data->address);
            $laundry->setLogo($data->icon);
            $laundry->setMinimumWeight(3);
            $laundry->setCoordinates($data->coordinates);
            $laundry->setPlaceId($data->place_id);
            $laundry->setUrl($data->url);
            if (property_exists($data, 'website')) {
                $laundry->setWebsite($data->website);
            }
            if (property_exists($data, 'rating')) {
                $laundry->setRating($data->rating);
            }
            if (property_exists($data, 'phone')) {
                $laundry->setPhoneNumber($data->phone);
            }

            $em->persist($laundry);
        }
        $em->flush();

        $output->writeln(count($laundry_data) . ' laundry shops imported.');
    }

}
