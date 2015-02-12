<?php

namespace Base\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurbineStatusCode_2011
 *
 * @ORM\Table(name="`DATA_WAREHOUSE.TurbineStatusCode_2011`")
 * @ORM\Entity(repositoryClass="Base\CoreBundle\Repository\TurbineStatusCode_2011Repository")
 */
class TurbineStatusCode_2011
{
    /**
     * @ORM\ManyToOne(targetEntity="Base\CoreBundle\Entity\Turbine")
     * @ORM\Id
     * @ORM\Column(name="`turbineId`")
     */
    private $turbine;

    /**
     * @ORM\ManyToOne(targetEntity="Base\CoreBundle\Entity\StatusCode")
     * @ORM\Id
     * @ORM\Column(name="`statusCodeId`")
     */
    private $statusCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="incomming", type="boolean")
     */
    private $incomming;

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return TurbineStatusCode_2011
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set incomming
     *
     * @param boolean $incomming
     * @return TurbineStatusCode_2011
     */
    public function setIncomming($incomming)
    {
        $this->incomming = $incomming;

        return $this;
    }

    /**
     * Get incomming
     *
     * @return boolean 
     */
    public function getIncomming()
    {
        return $this->incomming;
    }

    /**
     * Set turbine
     *
     * @param string $turbine
     * @return TurbineStatusCode_2011
     */
    public function setTurbine($turbine)
    {
        $this->turbine = $turbine;

        return $this;
    }

    /**
     * Get turbine
     *
     * @return string 
     */
    public function getTurbine()
    {
        return $this->turbine;
    }

    /**
     * Set statusCode
     *
     * @param string $statusCode
     * @return TurbineStatusCode_2011
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Get statusCode
     *
     * @return string 
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
