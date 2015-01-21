<?php

namespace Intechnology\BackendManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $mobileTelephone;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $deleted;

    /**
     * @var \Intechnology\BackendManagementBundle\Entity\Companies
     */
    private $fCompany;

    /**
     * @var \Intechnology\BackendManagementBundle\Entity\UserTypes
     */
    private $fUserType;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Users
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return Users
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Users
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobileTelephone
     *
     * @param string $mobileTelephone
     * @return Users
     */
    public function setMobileTelephone($mobileTelephone)
    {
        $this->mobileTelephone = $mobileTelephone;

        return $this;
    }

    /**
     * Get mobileTelephone
     *
     * @return string 
     */
    public function getMobileTelephone()
    {
        return $this->mobileTelephone;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Users
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
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Users
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set active
     *
     * @param string $active
     * @return Users
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
     * @return Users
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
     * Set fCompany
     *
     * @param \Intechnology\BackendManagementBundle\Entity\Companies $fCompany
     * @return Users
     */
    public function setFCompany(\Intechnology\BackendManagementBundle\Entity\Companies $fCompany = null)
    {
        $this->fCompany = $fCompany;

        return $this;
    }

    /**
     * Get fCompany
     *
     * @return \Intechnology\BackendManagementBundle\Entity\Companies 
     */
    public function getFCompany()
    {
        return $this->fCompany;
    }

    /**
     * Set fUserType
     *
     * @param \Intechnology\BackendManagementBundle\Entity\UserTypes $fUserType
     * @return Users
     */
    public function setFUserType(\Intechnology\BackendManagementBundle\Entity\UserTypes $fUserType = null)
    {
        $this->fUserType = $fUserType;

        return $this;
    }

    /**
     * Get fUserType
     *
     * @return \Intechnology\BackendManagementBundle\Entity\UserTypes 
     */
    public function getFUserType()
    {
        return $this->fUserType;
    }
}
