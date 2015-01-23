<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20/01/15
 * Time: 12:19
 */

// src/AppBundle/Form/Type/CompanyType.php

namespace Intechnology\BackendManagementBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CompanyType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('name')
      ->add('addressLine1')
      ->add('addressLine2')
      ->add('addressLine3')
      ->add('town')
      ->add('county')
      ->add('postcode')
      ->add('country', 'entity', array(
        'class' => 'IntechnologyBackendManagementBundle:Country',
        'property' => 'name'
      ))
      ->add('telephone')
      ->add('primaryContactName')
      ->add('primaryContactEmailAddress')
      ->add('outOfHoursContactName')
      ->add('outOfHoursContactTelephone')
      ->add('outOfHoursContactEmailAddress')
      //->add('logo')
      ->add('maxDeploymentCount')
      ->add('maxAggregateDeploymentBandwidth')
      ->add('maxSimultaneousUsers')
      ->add('couponCapability')
      ->add('paymentLimitations')
      //->add('created')
      //->add('lastUpdate')
      ->add('superCompany')
      ->add('active')
      //->add('deleted')
      ->add('Save', 'submit');
  }

  public function getName()
  {
    return 'company';
  }
}