<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 21/01/15
 * Time: 10:53
 */

namespace Intechnology\BackendManagementBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Intechnology\BackendManagementBundle\Entity\Company;


class UserType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
//    $company = new Company();
//    $repository = $company->getDoctrine()
//      ->getRepository('IntechnologyBackendManagementBundle:Company');
//
//    $companies = $repository->findAll();
//    $choices = array();
//
//    foreach ($companies as $company) {
//      $choices[$company->getId()] = $company->getName();
//    }

    $builder
      ->add('firstName')
      ->add('lastName')
      ->add('username', null, array(
        'label'  => 'Email address',
      ))
      ->add('password', 'repeated', array(
        'type' => 'password',
        'invalid_message' => 'Passwords do not match'
      ))
      ->add('telephone', null, array(
        'label' => 'Telephone number'
      ))
      ->add('mobileTelephone', null, array(
        'label' => 'Mobile number'
      ))
      ->add('company', 'entity', array(
        'class' => 'IntechnologyBackendManagementBundle:Company',
        'property' => 'name'
      ))
      ->add('userType', 'entity', array(
        'class' => 'IntechnologyBackendManagementBundle:UserType',
        'property' => 'name'
      ))
      ->add('isActive')
      //->add('deleted')
      //->add('userType')
      //->add('companyId')
      ->add('Save', 'submit');
  }

  public function getName()
  {
    return 'user';
  }
} 