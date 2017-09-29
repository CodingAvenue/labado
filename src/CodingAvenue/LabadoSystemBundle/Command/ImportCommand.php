<?php

namespace CodingAvenue\LabadoSystemBundle\Command;

use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use CodingAvenue\LabadoSystemBundle\Document\LaundryShop;
use CodingAvenue\LabadoSystemBundle\Document\LaundryService;
use CodingAvenue\LabadoSystemBundle\Document\Coordinates;

class ImportCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('import')
            ->setDescription('Import laundry shop and services data from source file to database')
            ->addArgument('path', InputArgument::OPTIONAL, 'Path to the import file')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $path = $input->getArgument('path');
        $laundry_data = file($path);

        /** @var DocumentManager $em */
        $em = $this->getContainer()->get('doctrine_mongodb')->getManager();
        foreach ($laundry_data as $list) {
            $data = json_decode(trim($list));

            $laundry = new LaundryShop();
            $laundry->setName($data->name);
            $laundry->setAddress($data->address);
            $laundry->setLogo($data->icon);
            $laundry->setMinimumWeight(3);

            $coordinates = new Coordinates();
            $coordinates->setX($data->coordinates->lng);
            $coordinates->setY($data->coordinates->lat);
            $laundry->setCoordinates($coordinates);

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

            $services = $data->services;
            foreach($services as $types) {
                $laundry_service = new LaundryService();
                $laundry_service->setType($types->type);
                $laundry_service->setPricePerKilo($types->price_per_kilo);
                $laundry->addService($laundry_service);
            }
        }

        $em->flush();

        $output->writeln(count($laundry_data) . ' laundry shops and services imported.');
    }
}
