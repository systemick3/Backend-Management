<?php

namespace Intechnology\BackendManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HardwareItemStat
 */
class HardwareItemStat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var string
     */
    private $pingable;

    /**
     * @var integer
     */
    private $uptime;

    /**
     * @var integer
     */
    private $cpuUsage;

    /**
     * @var string
     */
    private $operationalStatus;

    /**
     * @var integer
     */
    private $octetsIn;

    /**
     * @var integer
     */
    private $octetsOut;

    /**
     * @var integer
     */
    private $clientCount;

    /**
     * @var \Intechnology\BackendManagementBundle\Entity\HardwareItem
     */
    private $fHardwareItem;


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
     * Set created
     *
     * @param \DateTime $created
     * @return HardwareItemStat
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set pingable
     *
     * @param string $pingable
     * @return HardwareItemStat
     */
    public function setPingable($pingable)
    {
        $this->pingable = $pingable;

        return $this;
    }

    /**
     * Get pingable
     *
     * @return string 
     */
    public function getPingable()
    {
        return $this->pingable;
    }

    /**
     * Set uptime
     *
     * @param integer $uptime
     * @return HardwareItemStat
     */
    public function setUptime($uptime)
    {
        $this->uptime = $uptime;

        return $this;
    }

    /**
     * Get uptime
     *
     * @return integer 
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * Set cpuUsage
     *
     * @param integer $cpuUsage
     * @return HardwareItemStat
     */
    public function setCpuUsage($cpuUsage)
    {
        $this->cpuUsage = $cpuUsage;

        return $this;
    }

    /**
     * Get cpuUsage
     *
     * @return integer 
     */
    public function getCpuUsage()
    {
        return $this->cpuUsage;
    }

    /**
     * Set operationalStatus
     *
     * @param string $operationalStatus
     * @return HardwareItemStat
     */
    public function setOperationalStatus($operationalStatus)
    {
        $this->operationalStatus = $operationalStatus;

        return $this;
    }

    /**
     * Get operationalStatus
     *
     * @return string 
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * Set octetsIn
     *
     * @param integer $octetsIn
     * @return HardwareItemStat
     */
    public function setOctetsIn($octetsIn)
    {
        $this->octetsIn = $octetsIn;

        return $this;
    }

    /**
     * Get octetsIn
     *
     * @return integer 
     */
    public function getOctetsIn()
    {
        return $this->octetsIn;
    }

    /**
     * Set octetsOut
     *
     * @param integer $octetsOut
     * @return HardwareItemStat
     */
    public function setOctetsOut($octetsOut)
    {
        $this->octetsOut = $octetsOut;

        return $this;
    }

    /**
     * Get octetsOut
     *
     * @return integer 
     */
    public function getOctetsOut()
    {
        return $this->octetsOut;
    }

    /**
     * Set clientCount
     *
     * @param integer $clientCount
     * @return HardwareItemStat
     */
    public function setClientCount($clientCount)
    {
        $this->clientCount = $clientCount;

        return $this;
    }

    /**
     * Get clientCount
     *
     * @return integer 
     */
    public function getClientCount()
    {
        return $this->clientCount;
    }

    /**
     * Set fHardwareItem
     *
     * @param \Intechnology\BackendManagementBundle\Entity\HardwareItem $fHardwareItem
     * @return HardwareItemStat
     */
    public function setFHardwareItem(\Intechnology\BackendManagementBundle\Entity\HardwareItem $fHardwareItem = null)
    {
        $this->fHardwareItem = $fHardwareItem;

        return $this;
    }

    /**
     * Get fHardwareItem
     *
     * @return \Intechnology\BackendManagementBundle\Entity\HardwareItem 
     */
    public function getFHardwareItem()
    {
        return $this->fHardwareItem;
    }
}
