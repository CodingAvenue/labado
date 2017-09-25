<?php
namespace CodingAvenue\LabadoSystemBundle\Repository;

use CodingAvenue\LabadoSystemBundle\Document\Labadoer;
use CodingAvenue\LabadoSystemBundle\Document\Coordinates;
use Doctrine\ODM\MongoDB\DocumentRepository;


class LabadoerRepository extends DocumentRepository
{
    public function findOneNearby(Coordinates $coords): Labadoer {
        $labadoer = $this->createQueryBuilder(Labadoer::class)
            ->geoNear($coords->x, $coords->y)
            ->spherical(true)
            ->distanceMultiplier(6378.137) // Convert radians to kilometers (use 3963.192 for miles)
            ->limit(1)
            ->getQuery()
            ->getSingleResult();

        return $labadoer;
    }
}
