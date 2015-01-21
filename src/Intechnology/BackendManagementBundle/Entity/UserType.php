<?php

namespace Intechnology\BackendManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserType
 */
class UserType
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fFunctionalItem;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fFunctionalItem = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return UserType
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
     * @return UserType
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
     * @return UserType
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
     * Add fFunctionalItem
     *
     * @param \Intechnology\BackendManagementBundle\Entity\FunctionalItem $fFunctionalItem
     * @return UserType
     */
    public function addFFunctionalItem(\Intechnology\BackendManagementBundle\Entity\FunctionalItem $fFunctionalItem)
    {
        $this->fFunctionalItem[] = $fFunctionalItem;

        return $this;
    }

    /**
     * Remove fFunctionalItem
     *
     * @param \Intechnology\BackendManagementBundle\Entity\FunctionalItem $fFunctionalItem
     */
    public function removeFFunctionalItem(\Intechnology\BackendManagementBundle\Entity\FunctionalItem $fFunctionalItem)
    {
        $this->fFunctionalItem->removeElement($fFunctionalItem);
    }

    /**
     * Get fFunctionalItem
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFFunctionalItem()
    {
        return $this->fFunctionalItem;
    }
}
