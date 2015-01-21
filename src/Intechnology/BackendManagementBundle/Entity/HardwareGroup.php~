<?php

namespace Intechnology\BackendManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HardwareGroup
 */
class HardwareGroup
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $deleted;

    /**
     * @var \Intechnology\BackendManagementBundle\Entity\Deployment
     */
    private $fDeployment;

    /**
     * @var \Intechnology\BackendManagementBundle\Entity\HardwareGroup
     */
    private $fParentHardwareGroup;

    /**
     * @var \Intechnology\BackendManagementBundle\Entity\HardwareItem
     */
    private $fParentHardwareItem;


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
     * @return HardwareGroup
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
     * Set location
     *
     * @param string $location
     * @return HardwareGroup
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
     * Set active
     *
     * @param string $active
     * @return HardwareGroup
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     * @return HardwareGroup
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return string 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set fDeployment
     *
     * @param \Intechnology\BackendManagementBundle\Entity\Deployment $fDeployment
     * @return HardwareGroup
     */
    public function setFDeployment(\Intechnology\BackendManagementBundle\Entity\Deployment $fDeployment = null)
    {
        $this->fDeployment = $fDeployment;

        return $this;
    }

    /**
     * Get fDeployment
     *
     * @return \Intechnology\BackendManagementBundle\Entity\Deployment 
     */
    public function getFDeployment()
    {
        return $this->fDeployment;
    }

    /**
     * Set fParentHardwareGroup
     *
     * @param \Intechnology\BackendManagementBundle\Entity\HardwareGroup $fParentHardwareGroup
     * @return HardwareGroup
     */
    public function setFParentHardwareGroup(\Intechnology\BackendManagementBundle\Entity\HardwareGroup $fParentHardwareGroup = null)
    {
        $this->fParentHardwareGroup = $fParentHardwareGroup;

        return $this;
    }

    /**
     * Get fParentHardwareGroup
     *
     * @return \Intechnology\BackendManagementBundle\Entity\HardwareGroup 
     */
    public function getFParentHardwareGroup()
    {
        return $this->fParentHardwareGroup;
    }

    /**
     * Set fParentHardwareItem
     *
     * @param \Intechnology\BackendManagementBundle\Entity\HardwareItem $fParentHardwareItem
     * @return HardwareGroup
     */
    public function setFParentHardwareItem(\Intechnology\BackendManagementBundle\Entity\HardwareItem $fParentHardwareItem = null)
    {
        $this->fParentHardwareItem = $fParentHardwareItem;

        return $this;
    }

    /**
     * Get fParentHardwareItem
     *
     * @return \Intechnology\BackendManagementBundle\Entity\HardwareItem 
     */
    public function getFParentHardwareItem()
    {
        return $this->fParentHardwareItem;
    }
}
