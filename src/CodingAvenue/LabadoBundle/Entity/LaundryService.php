<?php

namespace CodingAvenue\LabadoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaundryServices
 *
 * @ORM\Table(name="laundry_service")
 * @ORM\Entity(repositoryClass="CodingAvenue\LabadoBundle\Repository\LaundryServiceRepository")
 */
class LaundryService
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
     * @ORM\Column(name="price_per_kilo", type="float")
     */
    private $pricePerKilo;

    /**
     * @ORM\ManyToOne(targetEntity="LaundryShop", inversedBy="services")
     */
    private $laundryShop;

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
     * Set pricePerKilo
     *
     * @param float $pricePerKilo
     *
     * @return LaundryServices
     */
    public function setPricePerKilo($pricePerKilo)
    {
        $this->pricePerKilo = $pricePerKilo;

        return $this;
    }

    /**
     * Get pricePerKilo
     *
     * @return float
     */
    public function getPricePerKilo()
    {
        return $this->pricePerKilo;
    }

    /**
     * Set laundryShop
     *
     * @param integer $laundryShop
     *
     * @return LaundryServices
     */
    public function setLaundryShop(LaundryShop $laundryShop)
    {
        $this->laundryShop = $laundryShop;

        return $this;
    }

    /**
     *
     * @return LaundryShop
     */
    public function getLaundryShop()
    {
        return $this->laundryShop;
    }
}

