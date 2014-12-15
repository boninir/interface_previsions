<?php

namespace Base\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Turbine
 *
 * @ORM\Table(name="`DATA_WAREHOUSE.Turbine`")
 * @ORM\Entity(repositoryClass="Base\CoreBundle\Repository\TurbineRepository")
 */
class Turbine
{
    /**
     * @ORM\ManyToOne(targetEntity="Base\CoreBundle\Entity\TurbineModel")
     * @ORM\JoinColumn(name="""turbineModelId""", referencedColumnName="`id`", nullable=false)
     * @ORM\JoinTable(name="`DATA_WAREHOUSE.TurbineModel`")
     */
    private $turbineModel;

    /**
     * @ORM\ManyToOne(targetEntity="Base\CoreBundle\Entity\WindFarm", inversedBy="turbines")
     * @ORM\JoinColumn(name="""windFarmId""", referencedColumnName="`id`", nullable=false)
     * @ORM\JoinTable(name="`DATA_WAREHOUSE.WindFarm`")
     */
    private $windFarm;

    /**
     * @var string
     *
     * @ORM\Column(name="`id`", type="string", length=16)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="""DATA_WAREHOUSE"".""Turbine_id_seq""", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="`alias`", type="string", length=32, nullable=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="`name`", type="text", nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="`numInWindFarm`", type="smallint", nullable=true)
     */
    private $numInWindFarm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="`firstRunningDate`", type="date", nullable=true)
     */
    private $firstRunningDate;

    /**
     * @var float
     *
     * @ORM\Column(name="`hubHeight`", type="float", nullable=true)
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
     * Set firstRunningDate
     *
     * @param \DateTime $firstRunningDate
     * @return Turbine
     */
    public function setFirstRunningDate($firstRunningDate)
    {
        $this->firstRunningDate = $firstRunningDate;

        return $this;
    }

    /**
     * Get firstRunningDate
     *
     * @return \DateTime 
     */
    public function getFirstRunningDate()
    {
        return $this->firstRunningDate;
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

    /**
     * Set turbineModel
     *
     * @param \Base\CoreBundle\Entity\TurbineModel $turbineModel
     * @return Turbine
     */
    public function setTurbineModel(\Base\CoreBundle\Entity\TurbineModel $turbineModel)
    {
        $this->turbineModel = $turbineModel;

        return $this;
    }

    /**
     * Get turbineModel
     *
     * @return \Base\CoreBundle\Entity\TurbineModel 
     */
    public function getTurbineModel()
    {
        return $this->turbineModel;
    }

    /**
     * Set windFarm
     *
     * @param \Base\CoreBundle\Entity\WindFarm $windFarm
     * @return Turbine
     */
    public function setWindFarm(\Base\CoreBundle\Entity\WindFarm $windFarm)
    {
        $this->windFarm = $windFarm;

        return $this;
    }

    /**
     * Get windFarm
     *
     * @return \Base\CoreBundle\Entity\WindFarm 
     */
    public function getWindFarm()
    {
        return $this->windFarm;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Turbine
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
