<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20/01/15
 * Time: 11:24
 */

namespace Intechnology\BackendManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Intechnology\BackendManagementBundle\Form\Type\CompanyType;
use Intechnology\BackendManagementBundle\Entity\Company;
use Symfony\Component\HttpFoundation\Request;


class CompanyController extends Controller {

  public function indexAction()
  {
    $repository = $this->getDoctrine()
      ->getRepository('IntechnologyBackendManagementBundle:Company');

    $companies = $repository->findAll();

    return $this->render('IntechnologyBackendManagementBundle:Company:index.html.twig', array('companies' => $companies));
  }

  public function createAction(Request $request) {
    $company = new Company;
    $form = $this->createForm(new CompanyType(), $company);

    $form->handleRequest($request);

    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->persist($company);
      $em->flush();

      $request->getSession()->getFlashBag()->add(
        'notice',
        'Created new company: ' . $company->getName()
      );

      return $this->redirect($this->generateUrl('_companies'));
    }

    return $this->render('IntechnologyBackendManagementBundle:Company:form.html.twig', array('form' => $form->createView()));
  }

  public function updateAction(Request $request) {

    $company = $this->getDoctrine()
      ->getRepository('IntechnologyBackendManagementBundle:Company')
      ->find($request->get('id'));

    if (!$company) {
      throw $this->createNotFoundException(
        'No company found for id '.$id
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

    $form = $this->createForm(new CompanyType(), $company);

    $form->handleRequest($request);

    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->flush();

      $request->getSession()->getFlashBag()->add(
        'notice',
        'Updated company: ' . $company->getName()
      );

      return $this->redirect($this->generateUrl('_companies'));
    }

    return $this->render('IntechnologyBackendManagementBundle:Company:form.html.twig', array('form' => $form->createView()));
  }
} 