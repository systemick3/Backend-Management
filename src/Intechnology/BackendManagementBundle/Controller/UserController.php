<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 21/01/15
 * Time: 10:44
 */

namespace Intechnology\BackendManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Intechnology\BackendManagementBundle\Entity\User;
use Intechnology\BackendManagementBundle\Form\Type\UserType;


class UserController extends Controller {

  public function indexAction()
  {
    $repository = $this->getDoctrine()
      ->getRepository('IntechnologyBackendManagementBundle:User');

    $users = $repository->findAll();

    return $this->render('IntechnologyBackendManagementBundle:User:index.html.twig', array('users' => $users));
  }

  public function createAction(Request $request) {
    $user = new User;
    $form = $this->createForm(new UserType(), $user);

    $form->handleRequest($request);

    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $plainPassword = $user->getPassword();
      $encoder = $this->container->get('security.password_encoder');
      $encoded = $encoder->encodePassword($user, $plainPassword);

      $user->setPassword($encoded);

      $em->persist($user);
      $em->flush();

      $request->getSession()->getFlashBag()->add(
        'notice',
        'Created new user: ' . $user->getUsername()
      );

      return $this->redirect($this->generateUrl('_users'));
    }

    return $this->render('IntechnologyBackendManagementBundle:User:form.html.twig', array('form' => $form->createView()));
  }

  public function updateAction(Request $request) {

    $user = $this->getDoctrine()
      ->getRepository('IntechnologyBackendManagementBundle:User')
      ->find($request->get('id'));

    if (!$user) {
      throw $this->createNotFoundException(
        'No user found for id '.$id
      );
    }

//    $deployments = $company->getDeployments();
//    dump($deployments);
//
//    foreach ($deployments as $deployment) {
//      print $deployment->getName() . '<br/>';
//    }
//    die(__FUNCTION__);
//    print '<pre>';
//    print_r($deployments);
    //die(__FUNCTION__);

    $form = $this->createForm(new UserType(), $user);

    $form->handleRequest($request);

    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $plainPassword = $user->getPassword();
      $encoder = $this->container->get('security.password_encoder');
      $encoded = $encoder->encodePassword($user, $plainPassword);

      $user->setPassword($encoded);

      $em->flush();

      $request->getSession()->getFlashBag()->add(
        'notice',
        'Updated user: ' . $user->getUsername()
      );

      return $this->redirect($this->generateUrl('_users'));
    }

    return $this->render('IntechnologyBackendManagementBundle:User:form.html.twig', array('form' => $form->createView()));
  }
} 