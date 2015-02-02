<?php

namespace Base\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusCode
 *
 * @ORM\Table(name="`DATA_WAREHOUSE.StatusCode`")
 * @ORM\Entity(repositoryClass="Base\CoreBundle\Repository\StatusCodeRepository")
 */
class StatusCode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="`id`", type="string", length=16)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="""DATA_WAREHOUSE"".""StatusCode_id_seq""", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="`name`", type="string", length=64, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="`description`", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="`level`", type="smallint", nullable=true)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="`setDelay`", type="bigint", nullable=true)
     */
    private $setDelay;

    /**
     * @var integer
     *
     * @ORM\Column(name="`resetDelay`", type="bigint", nullable=true)
     */
    private $resetDelay;

    /**
     * @var string
     *
     * @ORM\Column(name="`group`", type="string", length=32, nullable=true)
     */
    private $groupe;

    /**
     * @var string
     *
     * @ORM\Column(name="`brakeProgram`", type="string", length=16, nullable=true)
     */
    private $brakeProgram;

    /**
     * @var string
     *
     * @ORM\Column(name="`yawProgram`", type="string", length=16, nullable=true)
     */
    private $yawProgram;

    /**
     * @var string
     *
     * @ORM\Column(name="`type`", type="string", length=32, nullable=true)
     */
    private $type;


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
     * Set name
     *
     * @param string $name
     * @return StatusCode
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
     * Set description
     *
     * @param string $description
     * @return StatusCode
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return StatusCode
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set setDelay
     *
     * @param integer $setDelay
     * @return StatusCode
     */
    public function setSetDelay($setDelay)
    {
        $this->setDelay = $setDelay;

        return $this;
    }

    /**
     * Get setDelay
     *
     * @return integer 
     */
    public function getSetDelay()
    {
        return $this->setDelay;
    }

    /**
     * Set resetDelay
     *
     * @param integer $resetDelay
     * @return StatusCode
     */
    public function setResetDelay($resetDelay)
    {
        $this->resetDelay = $resetDelay;

        return $this;
    }

    /**
     * Get resetDelay
     *
     * @return integer 
     */
    public function getResetDelay()
    {
        return $this->resetDelay;
    }

    /**
     * Set groupe
     *
     * @param string $groupe
     * @return StatusCode
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return string 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set brakeProgram
     *
     * @param string $brakeProgram
     * @return StatusCode
     */
    public function setBrakeProgram($brakeProgram)
    {
        $this->brakeProgram = $brakeProgram;

        return $this;
    }

    /**
     * Get brakeProgram
     *
     * @return string 
     */
    public function getBrakeProgram()
    {
        return $this->brakeProgram;
    }

    /**
     * Set yawProgram
     *
     * @param string $yawProgram
     * @return StatusCode
     */
    public function setYawProgram($yawProgram)
    {
        $this->yawProgram = $yawProgram;

        return $this;
    }

    /**
     * Get yawProgram
     *
     * @return string 
     */
    public function getYawProgram()
    {
        return $this->yawProgram;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return StatusCode
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
