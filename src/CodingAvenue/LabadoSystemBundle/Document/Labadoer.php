<?php
namespace CodingAvenue\LabadoSystemBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="Repositories\LabadoerRepository")
 * @MongoDB\Index(keys={"coordinates"="2d"})
 */
class Labadoer
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\Field(type="string") */
    public $photo;

    /** @MongoDB\Field(type="string") */
    public $firstname;

    /** @MongoDB\Field(type="string") */
    public $lastname;

    /** @MongoDB\Field(type="string") */
    public $phoneNumber;

    /** @MongoDB\Field(type="string") */
    public $status;

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
     * Set photo
     *
     * @param string $photo
     * @return self
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * Get photo
     *
     * @return string $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
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

    /**
     * Set coordinates
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\Coordinates $coordinates
     * @return self
     */
    public function setCoordinates(\CodingAvenue\LabadoSystemBundle\Document\Coordinates $coordinates)
    {
        $this->coordinates = $coordinates;
        return $this;
    }

    /**
     * Get coordinates
     *
     * @return CodingAvenue\LabadoSystemBundle\Document\Coordinates $coordinates
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
