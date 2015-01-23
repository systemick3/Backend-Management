<?php

namespace Intechnology\BackendManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Company
 */
class Company
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
    private $addressLine1;

    /**
     * @var string
     */
    private $addressLine2;

    /**
     * @var string
     */
    private $addressLine3;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $county;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @var integer
     */
    private $fCountryId;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $primaryContactName;

    /**
     * @var string
     */
    private $primaryContactEmailAddress;

    /**
     * @var string
     */
    private $outOfHoursContactName;

    /**
     * @var string
     */
    private $outOfHoursContactTelephone;

    /**
     * @var string
     */
    private $outOfHoursContactEmailAddress;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var integer
     */
    private $maxDeploymentCount;

    /**
     * @var integer
     */
    private $maxAggregateDeploymentBandwidth;

    /**
     * @var integer
     */
    private $maxSimultaneousUsers;

    /**
     * @var string
     */
    private $couponCapability;

    /**
     * @var string
     */
    private $paymentLimitations;

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
    private $superCompany;

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $deleted;

    /**
     * @var
     */
    private $deployments;

    public function __construct()
    {
      $this->deployments = new ArrayCollection();
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
     * @return Company
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
     * Set addressLine1
     *
     * @param string $addressLine1
     * @return Company
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string 
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     * @return Company
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string 
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set addressLine3
     *
     * @param string $addressLine3
     * @return Company
     */
    public function setAddressLine3($addressLine3)
    {
        $this->addressLine3 = $addressLine3;

        return $this;
    }

    /**
     * Get addressLine3
     *
     * @return string 
     */
    public function getAddressLine3()
    {
        return $this->addressLine3;
    }

    /**
     * Set town
     *
     * @param string $town
     * @return Company
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set county
     *
     * @param string $county
     * @return Company
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Company
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set fCountryId
     *
     * @param integer $fCountryId
     * @return Company
     */
    public function setFCountryId($fCountryId)
    {
        $this->fCountryId = $fCountryId;

        return $this;
    }

    /**
     * Get fCountryId
     *
     * @return integer 
     */
    public function getFCountryId()
    {
        return $this->fCountryId;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Company
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
     * Set primaryContactName
     *
     * @param string $primaryContactName
     * @return Company
     */
    public function setPrimaryContactName($primaryContactName)
    {
        $this->primaryContactName = $primaryContactName;

        return $this;
    }

    /**
     * Get primaryContactName
     *
     * @return string 
     */
    public function getPrimaryContactName()
    {
        return $this->primaryContactName;
    }

    /**
     * Set primaryContactEmailAddress
     *
     * @param string $primaryContactEmailAddress
     * @return Company
     */
    public function setPrimaryContactEmailAddress($primaryContactEmailAddress)
    {
        $this->primaryContactEmailAddress = $primaryContactEmailAddress;

        return $this;
    }

    /**
     * Get primaryContactEmailAddress
     *
     * @return string 
     */
    public function getPrimaryContactEmailAddress()
    {
        return $this->primaryContactEmailAddress;
    }

    /**
     * Set outOfHoursContactName
     *
     * @param string $outOfHoursContactName
     * @return Company
     */
    public function setOutOfHoursContactName($outOfHoursContactName)
    {
        $this->outOfHoursContactName = $outOfHoursContactName;

        return $this;
    }

    /**
     * Get outOfHoursContactName
     *
     * @return string 
     */
    public function getOutOfHoursContactName()
    {
        return $this->outOfHoursContactName;
    }

    /**
     * Set outOfHoursContactTelephone
     *
     * @param string $outOfHoursContactTelephone
     * @return Company
     */
    public function setOutOfHoursContactTelephone($outOfHoursContactTelephone)
    {
        $this->outOfHoursContactTelephone = $outOfHoursContactTelephone;

        return $this;
    }

    /**
     * Get outOfHoursContactTelephone
     *
     * @return string 
     */
    public function getOutOfHoursContactTelephone()
    {
        return $this->outOfHoursContactTelephone;
    }

    /**
     * Set outOfHoursContactEmailAddress
     *
     * @param string $outOfHoursContactEmailAddress
     * @return Company
     */
    public function setOutOfHoursContactEmailAddress($outOfHoursContactEmailAddress)
    {
        $this->outOfHoursContactEmailAddress = $outOfHoursContactEmailAddress;

        return $this;
    }

    /**
     * Get outOfHoursContactEmailAddress
     *
     * @return string 
     */
    public function getOutOfHoursContactEmailAddress()
    {
        return $this->outOfHoursContactEmailAddress;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Company
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set maxDeploymentCount
     *
     * @param integer $maxDeploymentCount
     * @return Company
     */
    public function setMaxDeploymentCount($maxDeploymentCount)
    {
        $this->maxDeploymentCount = $maxDeploymentCount;

        return $this;
    }

    /**
     * Get maxDeploymentCount
     *
     * @return integer 
     */
    public function getMaxDeploymentCount()
    {
        return $this->maxDeploymentCount;
    }

    /**
     * Set maxAggregateDeploymentBandwidth
     *
     * @param integer $maxAggregateDeploymentBandwidth
     * @return Company
     */
    public function setMaxAggregateDeploymentBandwidth($maxAggregateDeploymentBandwidth)
    {
        $this->maxAggregateDeploymentBandwidth = $maxAggregateDeploymentBandwidth;

        return $this;
    }

    /**
     * Get maxAggregateDeploymentBandwidth
     *
     * @return integer 
     */
    public function getMaxAggregateDeploymentBandwidth()
    {
        return $this->maxAggregateDeploymentBandwidth;
    }

    /**
     * Set maxSimultaneousUsers
     *
     * @param integer $maxSimultaneousUsers
     * @return Company
     */
    public function setMaxSimultaneousUsers($maxSimultaneousUsers)
    {
        $this->maxSimultaneousUsers = $maxSimultaneousUsers;

        return $this;
    }

    /**
     * Get maxSimultaneousUsers
     *
     * @return integer 
     */
    public function getMaxSimultaneousUsers()
    {
        return $this->maxSimultaneousUsers;
    }

    /**
     * Set couponCapability
     *
     * @param string $couponCapability
     * @return Company
     */
    public function setCouponCapability($couponCapability)
    {
        $this->couponCapability = $couponCapability;

        return $this;
    }

    /**
     * Get couponCapability
     *
     * @return string 
     */
    public function getCouponCapability()
    {
        return $this->couponCapability;
    }

    /**
     * Set paymentLimitations
     *
     * @param string $paymentLimitations
     * @return Company
     */
    public function setPaymentLimitations($paymentLimitations)
    {
        $this->paymentLimitations = $paymentLimitations;

        return $this;
    }

    /**
     * Get paymentLimitations
     *
     * @return string 
     */
    public function getPaymentLimitations()
    {
        return $this->paymentLimitations;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Company
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
     * @return Company
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
     * Set superCompany
     *
     * @param string $superCompany
     * @return Company
     */
    public function setSuperCompany($superCompany)
    {
        $this->superCompany = $superCompany;

        return $this;
    }

    /**
     * Get superCompany
     *
     * @return string 
     */
    public function getSuperCompany()
    {
        return $this->superCompany;
    }

    /**
     * Set active
     *
     * @param string $active
     * @return Company
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
     * @return Company
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
     * Add deployments
     *
     * @param \Intechnology\BackendManagementBundle\Entity\Deployment $deployments
     * @return Company
     */
    public function addDeployment(\Intechnology\BackendManagementBundle\Entity\Deployment $deployments)
    {
        $this->deployments[] = $deployments;

        return $this;
    }

    /**
     * Remove deployments
     *
     * @param \Intechnology\BackendManagementBundle\Entity\Deployment $deployments
     */
    public function removeDeployment(\Intechnology\BackendManagementBundle\Entity\Deployment $deployments)
    {
        $this->deployments->removeElement($deployments);
    }

    /**
     * Get deployments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDeployments()
    {
        return $this->deployments;
    }

    public function setCreatedValue()
    {
      $this->created = new \DateTime();
    }

    public function setUpdatedValue()
    {
      $this->lastUpdate = new \DateTime();
    }
    /**
     * @var \Intechnology\BackendManagementBundle\Entity\Country
     */
    private $country;


    /**
     * Set country
     *
     * @param \Intechnology\BackendManagementBundle\Entity\Country $country
     * @return Company
     */
    public function setCountry(\Intechnology\BackendManagementBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Intechnology\BackendManagementBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    public function getDeploymentCount() {
      $deployments = $this->getDeployments();
      return count($deployments);
    }
}
