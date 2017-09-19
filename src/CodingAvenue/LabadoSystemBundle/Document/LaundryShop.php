<?php
namespace CodingAvenue\LabadoSystemBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class LaundryShop
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\Field(type="string") */
    public $name;

    /** @MongoDB\Field(type="string") */
    public $address;

    /** @MongoDB\Field(type="integer") */
    public $minimumWeight;

    /** @MongoDB\Field(type="string") */
    public $mobileNumber;

    /** @MongoDB\Field(type="string") */
    public $phoneNumber;

    /** @MongoDB\EmbedOne(targetDocument="Coordinates") */
    public $coordinates;

    /** @MongoDB\Field(type="string") */
    public $placeId;

    /**
     * @MongoDB\EmbedMany(targetDocument="LaundryService")
     */
    public $services;

    /** @MongoDB\Field(type="string") */
    public $url;

    /** @MongoDB\Field(type="float") */
    public $rating;

    /** @MongoDB\Field(type="string") */
    public $logo;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
    public function __construct()
    {
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set minimumWeight
     *
     * @param integer $minimumWeight
     * @return self
     */
    public function setMinimumWeight($minimumWeight)
    {
        $this->minimumWeight = $minimumWeight;
        return $this;
    }

    /**
     * Get minimumWeight
     *
     * @return integer $minimumWeight
     */
    public function getMinimumWeight()
    {
        return $this->minimumWeight;
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
     * Set placeId
     *
     * @param string $placeId
     * @return self
     */
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
        return $this;
    }

    /**
     * Get placeId
     *
     * @return string $placeId
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * Add service
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\LaundryService $service
     */
    public function addService(\CodingAvenue\LabadoSystemBundle\Document\LaundryService $service)
    {
        $this->services[] = $service;
    }

    /**
     * Remove service
     *
     * @param CodingAvenue\LabadoSystemBundle\Document\LaundryService $service
     */
    public function removeService(\CodingAvenue\LabadoSystemBundle\Document\LaundryService $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection $services
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return self
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * Get website
     *
     * @return string $website
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set rating
     *
     * @param float $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * Get rating
     *
     * @return float $rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return self
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * Get logo
     *
     * @return string $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
