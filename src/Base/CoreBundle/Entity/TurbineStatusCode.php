<?php

namespace Base\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurbineStatusCode
 *
 * @ORM\Table(name="""DATA_WAREHOUSE"".""TurbineStatusCode_2014""")
 * @ORM\Entity(repositoryClass="Base\CoreBundle\Repository\TurbineStatusCodeRepository")
 */
class TurbineStatusCode
{
    /**
     * @ORM\ManyToOne(targetEntity="Base\CoreBundle\Entity\Turbine")
     * @ORM\Id
     */
    private $turbine;

    /**
     * @ORM\ManyToOne(targetEntity="Base\CoreBundle\Entity\StatusCode")
     * @ORM\Id
     */
    private $statusCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     * @ORM\Id
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
     * @return TurbineStatusCode
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
     * @return TurbineStatusCode
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
     * @param \Base\CoreBundle\Entity\Turbine $turbine
     * @return TurbineStatusCode
     */
    public function setTurbine(\Base\CoreBundle\Entity\Turbine $turbine)
    {
        $this->turbine = $turbine;

        return $this;
    }

    /**
     * Get turbine
     *
     * @return \Base\CoreBundle\Entity\Turbine 
     */
    public function getTurbine()
    {
        return $this->turbine;
    }

    /**
     * Set statusCode
     *
     * @param \Base\CoreBundle\Entity\StatusCode $statusCode
     * @return TurbineStatusCode
     */
    public function setStatusCode(\Base\CoreBundle\Entity\StatusCode $statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Get statusCode
     *
     * @return \Base\CoreBundle\Entity\StatusCode 
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
