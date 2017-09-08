<?php
namespace CodingAvenue\LabadoSystemBundle\Service;

use CodingAvenue\LabadoSystemBundle\Entity\Labadoer;

class LabadoerFinder 
{
    private $labadoer;

    public function __construct() {
        $this->labadoer = new Labadoer();
    }

    public function findNearby($long, $lat) {
        //logic 
        $this->labadoer->setName('Leonel V. Bobadila');
        $this->labadoer->setContactNumber('09231321321');
    }

    public function getLabadoer() {
        return $this->labadoer;
    }    
}