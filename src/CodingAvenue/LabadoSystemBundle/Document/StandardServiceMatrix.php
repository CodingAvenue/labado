<?php
namespace CodingAvenue\LabadoSystemBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** 
 * @MongoDB\EmbeddedDocument
 */
class StandardServiceMatrix 
{
    /** @MongoDB\Id */
    public $id;

    /**
    * @MongoDB\ReferenceOne(targetDocument="LaundryService")
    */
    public $service;

    /**
    * @MongoDB\Field(type="integer")
    */
    protected $quantity;
    
    /**
    * @MongoDB\Field(type="weight")
    */
    protected $weight;

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
     * Set service
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\laundry_service $service
     * @return self
     */
    public function setService(\CodingAvenue\LabadoSystemBundle\Document\laundry_service $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Get service
     *
     * @return CodingAvenue\LabadoSystemBundle\Document\laundry_service $service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set weight
     *
     * @param weight $weight
     * @return self
     */
    public function setWeight(\weight $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return weight $weight
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
