<?php

namespace CodingAvenue\LabadoSystemBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="Repositories\LabadoerRepository")
 * @MongoDB\Index(keys={"coordinates"="2d"})
 */
 class Vehicle
 {
     /**
      * @MongoDB\Id
      */
     protected $id;
 
     /**
      * @MongoDB\Field(type="string")
      */
     protected $type;
 
     /**
      * @MongoDB\Field(type="float")
      */
     protected $plateNumber;

     /**
     * @MongoDB\ReferenceOne(targetDocument="Labadoer")
     */
     protected $Labadoer;
 
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
     * Set type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set plateNumber
     *
     * @param float $plateNumber
     * @return self
     */
    public function setPlateNumber($plateNumber)
    {
        $this->plateNumber = $plateNumber;
        return $this;
    }

    /**
     * Get plateNumber
     *
     * @return float $plateNumber
     */
    public function getPlateNumber()
    {
        return $this->plateNumber;
    }

    /**
     * Set labadoer
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\Labadoer $labadoer
     * @return self
     */
    public function setLabadoer(\CodingAvenue\LabadoSystemBundle\Document\Labadoer $labadoer)
    {
        $this->Labadoer = $labadoer;
        return $this;
    }

    /**
     * Get labadoer
     *
     * @return CodingAvenue\LabadoSystemBundle\Document\Labadoer $labadoer
     */
    public function getLabadoer()
    {
        return $this->Labadoer;
    }
}
