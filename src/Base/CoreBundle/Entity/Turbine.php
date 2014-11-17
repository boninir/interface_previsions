<?php

namespace Base\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Turbine
 *
 * @ORM\Table(name="""maiaeolis"".""Turbine""")
 * @ORM\Entity(repositoryClass="Base\CoreBundle\Repository\TurbineRepository")
 */
class Turbine
{
    /**
     * @ORM\ManyToOne(targetEntity="Base\CoreBundle\Entity\TurbineModel")
     * @ORM\JoinColumn(nullable=false)
     */
    private $turbineModel;

    /**
     * @ORM\ManyToOne(targetEntity="Base\CoreBundle\Entity\WindFarm")
     * @ORM\JoinColumn(nullable=false)
     */
    private $windFarm;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=32)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="numInWindFarm", type="smallint")
     */
    private $numInWindFarm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="firstRunningDtae", type="date")
     */
    private $firstRunningDtae;

    /**
     * @var float
     *
     * @ORM\Column(name="hubHeight", type="float")
     */
    private $hubHeight;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return Turbine
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
     * Set name
     *
     * @param string $name
     * @return Turbine
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
     * Set numInWindFarm
     *
     * @param integer $numInWindFarm
     * @return Turbine
     */
    public function setNumInWindFarm($numInWindFarm)
    {
        $this->numInWindFarm = $numInWindFarm;

        return $this;
    }

    /**
     * Get numInWindFarm
     *
     * @return integer 
     */
    public function getNumInWindFarm()
    {
        return $this->numInWindFarm;
    }

    /**
     * Set firstRunningDtae
     *
     * @param \DateTime $firstRunningDtae
     * @return Turbine
     */
    public function setFirstRunningDtae($firstRunningDtae)
    {
        $this->firstRunningDtae = $firstRunningDtae;

        return $this;
    }

    /**
     * Get firstRunningDtae
     *
     * @return \DateTime 
     */
    public function getFirstRunningDtae()
    {
        return $this->firstRunningDtae;
    }

    /**
     * Set hubHeight
     *
     * @param float $hubHeight
     * @return Turbine
     */
    public function setHubHeight($hubHeight)
    {
        $this->hubHeight = $hubHeight;

        return $this;
    }

    /**
     * Get hubHeight
     *
     * @return float 
     */
    public function getHubHeight()
    {
        return $this->hubHeight;
    }
}
