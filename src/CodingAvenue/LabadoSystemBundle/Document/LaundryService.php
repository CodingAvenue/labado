<?php
namespace CodingAvenue\LabadoSystemBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class LaundryService
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\Field(type="string") */
    public $type;

    /** @MongoDB\Field(type="float") */
    public $pricePerKilo;

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
     * Set pricePerKilo
     *
     * @param float $pricePerKilo
     * @return self
     */
    public function setPricePerKilo($pricePerKilo)
    {
        $this->pricePerKilo = $pricePerKilo;
        return $this;
    }

    /**
     * Get pricePerKilo
     *
     * @return float $pricePerKilo
     */
    public function getPricePerKilo()
    {
        return $this->pricePerKilo;
    }
}
