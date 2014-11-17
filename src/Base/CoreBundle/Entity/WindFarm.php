<?php

namespace Base\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WindFarm
 *
 * @ORM\Table(name="""maiaeolis"".""WindFarm""")
 * @ORM\Entity(repositoryClass="Base\CoreBundle\Repository\WindFarmRepository")
 */
class WindFarm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="string", length=32)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=32)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text")
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="sncNbr", type="string", length=8)
     */
    private $sncNbr;


    /**
     * Get id
     *
     * @return string $id 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return WindFarm
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
     * Set alias
     *
     * @param string $alias
     * @return WindFarm
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return WindFarm
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set sncNbr
     *
     * @param string $sncNbr
     * @return WindFarm
     */
    public function setSncNbr($sncNbr)
    {
        $this->sncNbr = $sncNbr;

        return $this;
    }

    /**
     * Get sncNbr
     *
     * @return string 
     */
    public function getSncNbr()
    {
        return $this->sncNbr;
    }
}
