<?php

namespace Intechnology\BackendManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HardwareItem
 */
class HardwareItem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $hardwareType;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $address;

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
     * Set hardwareType
     *
     * @param string $hardwareType
     * @return HardwareItem
     */
    public function setHardwareType($hardwareType)
    {
        $this->hardwareType = $hardwareType;

        return $this;
    }

    /**
     * Get hardwareType
     *
     * @return string 
     */
    public function getHardwareType()
    {
        return $this->hardwareType;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return HardwareItem
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
     * Set label
     *
     * @param string $label
     * @return HardwareItem
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return HardwareItem
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set active
     *
     * @param string $active
     * @return HardwareItem
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
     * @return HardwareItem
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
     * @return HardwareItem
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
     * @return HardwareItem
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
     * @return HardwareItem
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
