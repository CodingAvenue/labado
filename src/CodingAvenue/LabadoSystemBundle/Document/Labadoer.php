<?php
namespace CodingAvenue\LabadoSystemBundle\Document;

use CodingAvenue\LabadoSystemBundle\Document\Coordinates;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="CodingAvenue\LabadoSystemBundle\Repository\LabadoerRepository")
 * @MongoDB\Index(keys={"coordinates"="2d"})
 */
class Labadoer
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\Field(type="string") */
    public $name;

    /** @MongoDB\EmbedOne(targetDocument="Coordinates") */
    public $coordinates;

    /** @MongoDB\Distance */
    public $distance;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set coordinates
     *
     * @param Coordinates $coordinates
     * @return self
     */
    public function setCoordinates(Coordinates $coordinates)
    {
        $this->coordinates = $coordinates;
        return $this;
    }

    /**
     * Get coordinates
     *
     * @return Coordinates $coordinates
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Set distance
     *
     * @param string $distance
     * @return self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Get distance
     *
     * @return string $distance
     */
    public function getDistance()
    {
        return $this->distance;
    }
}
