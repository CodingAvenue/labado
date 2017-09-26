<?php
namespace CodingAvenue\LabadoSystemBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @MongoDB\Document
 */
 class BookingRequest
 {
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\Field(type="date") */
    public $requested_at;

    /**
    * @MongoDB\ReferenceOne(targetDocument="User")
    */
    protected $user;

    /**
    * @MongoDB\ReferenceOne(targetDocument="LaundryShop")
    */
    protected $laundryShop;
    
    /**
    * @MongoDB\EmbedMany(targetDocument="StandardServiceMatrix")
    */
    protected $standardServiceMatrix;

    /**
    * @MongoDB\Field(type="string")
    */
    protected $status;

    public function __construct()
    {
        $this->standardServiceMatrix = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set requestedAt
     *
     * @param date $requestedAt
     * @return self
     */
    public function setRequestedAt($requestedAt)
    {
        $this->requested_at = $requestedAt;
        return $this;
    }

    /**
     * Get requestedAt
     *
     * @return date $requestedAt
     */
    public function getRequestedAt()
    {
        return $this->requested_at;
    }

    /**
     * Set user
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\User $user
     * @return self
     */
    public function setUser(\CodingAvenue\LabadoSystemBundle\Document\User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return CodingAvenue\LabadoSystemBundle\Document\User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set laundryShop
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\LaundryShop $laundryShop
     * @return self
     */
    public function setLaundryShop(\CodingAvenue\LabadoSystemBundle\Document\LaundryShop $laundryShop)
    {
        $this->laundryShop = $laundryShop;
        return $this;
    }

    /**
     * Get laundryShop
     *
     * @return CodingAvenue\LabadoSystemBundle\Document\LaundryShop $laundryShop
     */
    public function getLaundryShop()
    {
        return $this->laundryShop;
    }

    /**
     * Add standardServiceMatrix
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\StandardServiceMatrix $standardServiceMatrix
     */
    public function addStandardServiceMatrix(\CodingAvenue\LabadoSystemBundle\Document\StandardServiceMatrix $standardServiceMatrix)
    {
        $this->standardServiceMatrix[] = $standardServiceMatrix;
    }

    /**
     * Remove standardServiceMatrix
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\StandardServiceMatrix $standardServiceMatrix
     */
    public function removeStandardServiceMatrix(\CodingAvenue\LabadoSystemBundle\Document\StandardServiceMatrix $standardServiceMatrix)
    {
        $this->standardServiceMatrix->removeElement($standardServiceMatrix);
    }

    /**
     * Get standardServiceMatrix
     *
     * @return \Doctrine\Common\Collections\Collection $standardServiceMatrix
     */
    public function getStandardServiceMatrix()
    {
        return $this->standardServiceMatrix;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }
}
