<?php

namespace Intechnology\BackendManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FunctionalItem
 */
class FunctionalItem
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
    private $active;

    /**
     * @var string
     */
    private $deleted;

    /**
     * @var \Intechnology\BackendManagementBundle\Entity\FunctionalArea
     */
    private $fFunctionalArea;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fUserType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fUserType = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return FunctionalItem
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
     * Set active
     *
     * @param string $active
     * @return FunctionalItem
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
     * @return FunctionalItem
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
     * Set fFunctionalArea
     *
     * @param \Intechnology\BackendManagementBundle\Entity\FunctionalArea $fFunctionalArea
     * @return FunctionalItem
     */
    public function setFFunctionalArea(\Intechnology\BackendManagementBundle\Entity\FunctionalArea $fFunctionalArea = null)
    {
        $this->fFunctionalArea = $fFunctionalArea;

        return $this;
    }

    /**
     * Get fFunctionalArea
     *
     * @return \Intechnology\BackendManagementBundle\Entity\FunctionalArea 
     */
    public function getFFunctionalArea()
    {
        return $this->fFunctionalArea;
    }

    /**
     * Add fUserType
     *
     * @param \Intechnology\BackendManagementBundle\Entity\UserType $fUserType
     * @return FunctionalItem
     */
    public function addFUserType(\Intechnology\BackendManagementBundle\Entity\UserType $fUserType)
    {
        $this->fUserType[] = $fUserType;

        return $this;
    }

    /**
     * Remove fUserType
     *
     * @param \Intechnology\BackendManagementBundle\Entity\UserType $fUserType
     */
    public function removeFUserType(\Intechnology\BackendManagementBundle\Entity\UserType $fUserType)
    {
        $this->fUserType->removeElement($fUserType);
    }

    /**
     * Get fUserType
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFUserType()
    {
        return $this->fUserType;
    }
}
