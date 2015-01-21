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


class UserType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('firstName')
      ->add('lastName')
      ->add('username')
      ->add('password')
      ->add('telephone')
      ->add('mobileTelephone')
      ->add('isActive')
      ->add('deleted')
      //->add('userType')
      //->add('company')
      ->add('Save', 'submit');
  }

  public function getName()
  {
    return 'user';
  }
} 