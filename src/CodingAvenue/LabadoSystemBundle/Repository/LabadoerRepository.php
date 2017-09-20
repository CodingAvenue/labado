<?php
namespace CodingAvenue\LabadoSystemBundle\Repository;

use CodingAvenue\LabadoSystemBundle\Document\Coordinates;
use Doctrine\ODM\MongoDB\DocumentRepository;


class LabadoerRepository extends DocumentRepository
{
    public function findOneNearby(Coordinates $coordinates)
    {
        // @todo
    }
}
