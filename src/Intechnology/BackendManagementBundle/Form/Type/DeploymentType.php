<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20/01/15
 * Time: 12:19
 */

// src/AppBundle/Form/Type/DeploymentType.php

namespace Intechnology\BackendManagementBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DeploymentType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('name')
      ->add('mapPolygon')
      //->add('created')
      //->add('lastUpdate')
      ->add('active')
      ->add('deleted')
      //->add('fCompanyId')
      ->add('Save', 'submit');
  }

  public function getName()
  {
    return 'deployment';
  }
}