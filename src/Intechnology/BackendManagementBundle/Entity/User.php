<?php

namespace Intechnology\BackendManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 */
class User implements UserInterface, \Serializable
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
    private $username;

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
    private $isActive;

    /**
     * @var string
     */
    private $deleted;

    /**
     * @var \Intechnology\BackendManagementBundle\Entity\UserType
     */
    private $userType;

    /**
     * @var \Intechnology\BackendManagementBundle\Entity\Company
     */
    private $company;


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
     * @return User
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
     * @return User
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
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get active
     *
     * @return string 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     * @return User
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
     * Set userType
     *
     * @param \Intechnology\BackendManagementBundle\Entity\UserType $userType
     * @return User
     */
    public function setUserType(\Intechnology\BackendManagementBundle\Entity\UserType $userType = null)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return \Intechnology\BackendManagementBundle\Entity\UserType 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set company
     *
     * @param \Intechnology\BackendManagementBundle\Entity\Company $company
     * @return User
     */
    public function setCompany(\Intechnology\BackendManagementBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Intechnology\BackendManagementBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
      return array('ROLE_USER');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
      return serialize(array(
        $this->id,
        $this->username,
        $this->password,
        // see section on salt below
        // $this->salt,
      ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
      list (
        $this->id,
        $this->username,
        $this->password,
        // see section on salt below
        // $this->salt
        ) = unserialize($serialized);
    }

    public function getSalt() {

    }

    public function setCreatedValue()
    {
      $this->created = new \DateTime();
    }

    public function setUpdatedValue()
    {
      $this->lastUpdate = new \DateTime();
    }
}
