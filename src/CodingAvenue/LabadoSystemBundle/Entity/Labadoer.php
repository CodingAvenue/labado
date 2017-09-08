<?php

namespace CodingAvenue\LabadoSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Labadoer
 *
 * @ORM\Table(name="labadoer")
 * @ORM\Entity(repositoryClass="CodingAvenue\LabadoSystemBundle\Repository\LabadoerRepository")
 */
class Labadoer
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
     * @ORM\Column(name="contact_number", type="string")
     */
    private $contactNumber;


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
     * @return Labadoer
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
     * Set contactNumber
     *
     * @param integer $contactNumber
     *
     * @return Labadoer
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;

        return $this;
    }

    /**
     * Get contactNumber
     *
     * @return int
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }
}

