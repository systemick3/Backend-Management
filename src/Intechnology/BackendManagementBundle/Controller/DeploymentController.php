<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20/01/15
 * Time: 14:51
 */

namespace Intechnology\BackendManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Intechnology\BackendManagementBundle\Form\Type\DeploymentType;
use Intechnology\BackendManagementBundle\Entity\Deployment;
use Symfony\Component\HttpFoundation\Request;


class DeploymentController extends Controller {

  public function indexAction()
  {
    $repository = $this->getDoctrine()
      ->getRepository('IntechnologyBackendManagementBundle:Deployment');

    $deployments = $repository->findAll();

    return $this->render('IntechnologyBackendManagementBundle:Deployment:index.html.twig', array('deployments' => $deployments));
  }

  public function createAction(Request $request) {
    $deployment = new Deployment();
    $form = $this->createForm(new DeploymentType(), $deployment);

    $form->handleRequest($request);

    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->persist($deployment);
      $em->flush();

      $request->getSession()->getFlashBag()->add(
        'notice',
        'Created new deployment: ' . $deployment->getName()
      );

      return $this->redirect($this->generateUrl('_deployments'));
    }

    return $this->render(
      'IntechnologyBackendManagementBundle:Deployment:form.html.twig',
      array(
        'form' => $form->createView(),
        'title' => 'New Deployment'
      )
    );
  }

  public function updateAction(Request $request) {

    $deployment = $this->getDoctrine()
      ->getRepository('IntechnologyBackendManagementBundle:Deployment')
      ->find($request->get('id'));

    if (!$deployment) {
      throw $this->createNotFoundException(
        'No deployment found for id '.$id
      );
    }

    $hardwareGroups = $deployment->getHardwareGroups();
    //dump($deployment);
    //die($deployment->getCompany()->getName());

    $form = $this->createForm(new DeploymentType(), $deployment);

    $form->handleRequest($request);

    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->flush();

      $request->getSession()->getFlashBag()->add(
        'notice',
        'Updated deployment: ' . $deployment->getName()
      );

      return $this->redirect($this->generateUrl('_deployments'));
    }

    return $this->render(
      'IntechnologyBackendManagementBundle:Deployment:form.html.twig',
      array(
        'form' => $form->createView(),
        'title' => 'Edit ' . $deployment->getName(),
        'deployment' => $deployment,
        'hardwareGroups' => $hardwareGroups
      )
    );
  }

} 