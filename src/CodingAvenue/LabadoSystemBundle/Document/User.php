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

    // @todo add Coordinates embeded entity here. See Labadoer $coordinates property

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
}