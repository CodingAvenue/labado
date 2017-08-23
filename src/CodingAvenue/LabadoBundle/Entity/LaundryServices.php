<?php

namespace CodingAvenue\LabadoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaundryServices
 *
 * @ORM\Table(name="laundry_services")
 * @ORM\Entity(repositoryClass="CodingAvenue\LabadoBundle\Repository\LaundryServicesRepository")
 */
class LaundryServices
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float")
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="laundryShopId", type="string", length=255)
     */
    private $laundryShopId;


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
     * Set type
     *
     * @param string $type
     *
     * @return LaundryServices
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set rate
     *
     * @param float $rate
     *
     * @return LaundryServices
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set laundryShopId
     *
     * @param string $laundryShopId
     *
     * @return LaundryServices
     */
    public function setLaundryShopId($laundryShopId)
    {
        $this->laundryShopId = $laundryShopId;

        return $this;
    }

    /**
     * Get laundryShopId
     *
     * @return string
     */
    public function getLaundryShopId()
    {
        return $this->laundryShopId;
    }
}

