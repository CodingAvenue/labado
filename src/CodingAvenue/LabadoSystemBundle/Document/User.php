<?php
namespace CodingAvenue\LabadoSystemBundle\Document;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /** @MongoDB\EmbedOne(targetDocument="Coordinates") */
    public $coordinates;

    /** @MongoDB\Field(type="string") */
    private $address;
     
    /** @MongoDB\Field(type="string") */
    private $landmark;
    
    /** @MongoDB\Field(type="string") */
    private $mobileNumber;

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
     * Set address
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set landmark
     *
     * @param string $landmark
     * @return self
     */
    public function setLandmark($landmark)
    {
        $this->landmark = $landmark;
        return $this;
    }

    /**
     * Get landmark
     *
     * @return string $landmark
     */
    public function getLandmark()
    {
        return $this->landmark;
    }

    /**
     * Set mobileNumber
     *
     * @param string $mobileNumber
     * @return self
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * Get mobileNumber
     *
     * @return string $mobileNumber
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }
}
