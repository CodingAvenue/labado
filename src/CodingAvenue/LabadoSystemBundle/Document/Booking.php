<?php
namespace CodingAvenue\LabadoSystemBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @MongoDB\Document(repositoryClass="CodingAvenue\LabadoSystemBundle\Repository\BookingRepository")
 */
class Booking
{
    /** @MongoDB\Id */
    public $id;

    /**
     * @MongoDB\Field(type="date")
     */
     protected $bookedAt;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Labadoer")
     */
     protected $labadoer;

    /**
    * @MongoDB\ReferenceOne(targetDocument="User")
    */
    protected $user;
    
    /**
    * @MongoDB\Field(type="float")
    */
    protected $price;
    
    /**
    * @MongoDB\EmbedMany(targetDocument="StandardServiceMatrix")
    */
    protected $standardServiceMatrix;
    
    /**
    * @MongoDB\ReferenceOne(targetDocument="LaundryShop")
    */
    protected $laundryShop;
    
    const STATUS_IN_PROGRESS = "In Progress";

    /**
    * @MongoDB\Field(type="string")
    * @Assert\Choice(
    *      choices = {
    *          BookingRequest::STATUS_IN_PROGRESS: "In Progress"
    *      }
    * )
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
     * Set bookedAt
     *
     * @param date $bookedAt
     * @return self
     */
    public function setBookedAt($bookedAt)
    {
        $this->bookedAt = $bookedAt;
        return $this;
    }

    /**
     * Get bookedAt
     *
     * @return date $bookedAt
     */
    public function getBookedAt()
    {
        return $this->bookedAt;
    }

    /**
     * Set labadoer
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\Labadoer $labadoer
     * @return self
     */
    public function setLabadoer(\CodingAvenue\LabadoSystemBundle\Document\Labadoer $labadoer)
    {
        $this->labadoer = $labadoer;
        return $this;
    }

    /**
     * Get labadoer
     *
     * @return CodingAvenue\LabadoSystemBundle\Document\Labadoer $labadoer
     */
    public function getLabadoer()
    {
        return $this->labadoer;
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
     * Set price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
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
