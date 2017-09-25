<?php

namespace CodingAvenue\LabadoBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;
    
    /**
     * @var string
     *
     * @ORM\Column(name="landmark", type="string", length=255, nullable=true)
     */
    private $landmark;
    
    /**
     * @var string
     *
     * @ORM\Column(name="contact_number", type="string", length=255, nullable=true)
     */
    private $contactNumber;

    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * Set address 
     *
     * @param String $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    public function getLandmark()
    {
        return $this->landmark;
    }
    
    /**
     * Set landmark 
     *
     * @param String $landmark
     * @return User
     */
    public function setLandmark($landmark)
    {
        $this->landmark = $landmark;
    
        return $this;
    }

    public function getContactNumber()
    {
        return $this->contactNumber;
    }
    
    /**
     * Set contactNumber 
     *
     * @param String $contactNumber
     * @return User
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;
    
        return $this;
    }
}