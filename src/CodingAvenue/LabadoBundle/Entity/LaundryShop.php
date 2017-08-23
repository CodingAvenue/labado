<?php

namespace CodingAvenue\LabadoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * LaundryShop
 *
 * @ORM\Table(name="laundry_shop")
 * @ORM\Entity(repositoryClass="CodingAvenue\LabadoBundle\Repository\LaundryShopRepository")
 */
class LaundryShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var int
     *
     * @ORM\Column(name="minimum_weight", type="integer", nullable=true)
     */
    private $minimumWeight;

    /**
     * @var array
     *
     * @ORM\Column(name="coordinates", type="json_array")
     */
    private $coordinates;

    /**
     * @var string
     *
     * @ORM\Column(name="place_id", type="string", length=255)
     */
    private $placeId;

    /**
     * @ORM\OneToMany(targetEntity="LaundryService", mappedBy="laundryShop")
     */
    private $services;

    public function __construct()
    {
        $this->services = new ArrayCollection;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return LaundryShop
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return LaundryShop
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return LaundryShop
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set minimumWeight
     *
     * @param integer $minimumWeight
     *
     * @return LaundryShop
     */
    public function setMinimumWeight($minimumWeight)
    {
        $this->minimumWeight = $minimumWeight;

        return $this;
    }

    /**
     * Get minimumWeight
     *
     * @return int
     */
    public function getMinimumWeight()
    {
        return $this->minimumWeight;
    }

    /**
     * Set coordinates
     *
     * @param array $coordinates
     *
     * @return LaundryShop
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Get coordinates
     *
     * @return array
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Set placeId
     *
     * @param string $placeId
     *
     * @return LaundryShop
     */
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;

        return $this;
    }

    /**
     * Get placeId
     *
     * @return string
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * Get services 
     *
     * @return string
     */
    public function getServices()
    {
        return $this->services;
    }
}

