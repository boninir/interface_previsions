<?php

namespace Base\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurbineModel
 *
 * @ORM\Table(name="""maiaeolis"".""TurbineModel""")
 * @ORM\Entity(repositoryClass="Base\CoreBundle\Repository\TurbineModelRepository")
 */
class TurbineModel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="""id""", type="string", length=16)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="""maiaeolis"".""TurbineModel_id_seq""", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="""supplier""", type="string", length=32, nullable=true)
     */
    private $supplier;

    /**
     * @var string
     *
     * @ORM\Column(name="""model""", type="string", length=32, nullable=true)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="""hubHeight""", type="smallint", nullable=true)
     */
    private $hubHeight;

    /**
     * @var integer
     *
     * @ORM\Column(name="""maxPower""", type="integer", nullable=true)
     */
    private $maxPower;

    /**
     * @var integer
     *
     * @ORM\Column(name="""rotorDiameter""", type="smallint", nullable=true)
     */
    private $rotorDiameter;

    /**
     * @var string
     *
     * @ORM\Column(name="""gearbox""", type="string", length=32, nullable=true)
     */
    private $gearbox;

    /**
     * @var string
     *
     * @ORM\Column(name="""generator""", type="string", length=32, nullable=true)
     */
    private $generator;

    /**
     * @var string
     *
     * @ORM\Column(name="""converter""", type="string", length=32, nullable=true)
     */
    private $converter;


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
     * Set supplier
     *
     * @param string $supplier
     * @return TurbineModel
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return string 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return TurbineModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set hubHeight
     *
     * @param integer $hubHeight
     * @return TurbineModel
     */
    public function setHubHeight($hubHeight)
    {
        $this->hubHeight = $hubHeight;

        return $this;
    }

    /**
     * Get hubHeight
     *
     * @return integer 
     */
    public function getHubHeight()
    {
        return $this->hubHeight;
    }

    /**
     * Set maxPower
     *
     * @param integer $maxPower
     * @return TurbineModel
     */
    public function setMaxPower($maxPower)
    {
        $this->maxPower = $maxPower;

        return $this;
    }

    /**
     * Get maxPower
     *
     * @return integer 
     */
    public function getMaxPower()
    {
        return $this->maxPower;
    }

    /**
     * Set rotorDiameter
     *
     * @param integer $rotorDiameter
     * @return TurbineModel
     */
    public function setRotorDiameter($rotorDiameter)
    {
        $this->rotorDiameter = $rotorDiameter;

        return $this;
    }

    /**
     * Get rotorDiameter
     *
     * @return integer 
     */
    public function getRotorDiameter()
    {
        return $this->rotorDiameter;
    }

    /**
     * Set gearbox
     *
     * @param string $gearbox
     * @return TurbineModel
     */
    public function setGearbox($gearbox)
    {
        $this->gearbox = $gearbox;

        return $this;
    }

    /**
     * Get gearbox
     *
     * @return string 
     */
    public function getGearbox()
    {
        return $this->gearbox;
    }

    /**
     * Set generator
     *
     * @param string $generator
     * @return TurbineModel
     */
    public function setGenerator($generator)
    {
        $this->generator = $generator;

        return $this;
    }

    /**
     * Get generator
     *
     * @return string 
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * Set converter
     *
     * @param string $converter
     * @return TurbineModel
     */
    public function setConverter($converter)
    {
        $this->converter = $converter;

        return $this;
    }

    /**
     * Get converter
     *
     * @return string 
     */
    public function getConverter()
    {
        return $this->converter;
    }
}
