<?php

namespace Base\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurbineModel
 *
 * @ORM\Table(name="""maiaeolis"".""TurbineModel""")
 * @ORM\Entity(repositoryClass="Base\CoreBundle\Entity\TurbineModelRepository")
 */
class TurbineModel
{
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
     * @ORM\Column(name="supplier", type="string", length=32)
     */
    private $supplier;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=32)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="hubHeight", type="smallint")
     */
    private $hubHeight;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxPower", type="integer")
     */
    private $maxPower;

    /**
     * @var integer
     *
     * @ORM\Column(name="rotorDiameter", type="smallint")
     */
    private $rotorDiameter;

    /**
     * @var string
     *
     * @ORM\Column(name="gearbox", type="string", length=32)
     */
    private $gearbox;

    /**
     * @var string
     *
     * @ORM\Column(name="generator", type="string", length=32)
     */
    private $generator;

    /**
     * @var string
     *
     * @ORM\Column(name="converter", type="string", length=32)
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
