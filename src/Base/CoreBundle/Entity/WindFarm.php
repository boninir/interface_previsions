<?php

namespace Base\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WindFarm
 *
 * @ORM\Table(name="`DATA_WAREHOUSE.WindFarm`")
 * @ORM\Entity(repositoryClass="Base\CoreBundle\Repository\WindFarmRepository")
 */
class WindFarm
{
    /**
     * @ORM\OneToMany(targetEntity="Base\CoreBundle\Entity\Turbine", mappedBy="windFarm")
     */
    private $turbines;

    /**
     * @var string $id
     *
     * @ORM\Column(name="`id`", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="""DATA_WAREHOUSE"".""WindFarm_id_seq""", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="`name`", type="text", nullable=true)
     */
    private $name;

    /**
     * @var string $alias
     *
     * @ORM\Column(name="`alias`", type="string", length=32, nullable=true)
     */
    private $alias;

    /**
     * @var string $location
     *
     * @ORM\Column(name="`location`", type="text", nullable=true)
     */
    private $location;

    /**
     * @var string $sncNbr
     *
     * @ORM\Column(name="`sncNbr`", type="string", length=8, nullable=true)
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

    /**
     * Set id
     *
     * @param string $id
     * @return WindFarm
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->turbines = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add turbines
     *
     * @param \Base\CoreBundle\Entity\Turbine $turbines
     * @return WindFarm
     */
    public function addTurbine(\Base\CoreBundle\Entity\Turbine $turbines)
    {
        $this->turbines[] = $turbines;
        // ajouter la synchronisation avec l'objet windfarm si l'application doit permet l'ajout de parc
        $turbine->setWindFarm($this);
        return $this;
    }

    /**
     * Remove turbines
     *
     * @param \Base\CoreBundle\Entity\Turbine $turbines
     */
    public function removeTurbine(\Base\CoreBundle\Entity\Turbine $turbines)
    {
        $this->turbines->removeElement($turbines);
    }

    /**
     * Get turbines
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTurbines()
    {
        return $this->turbines;
    }
}
