<?php

namespace Intechnology\BackendManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $testLines = array();
        for ($i=0; $i<10; $i++) {
          $testLine = new \stdClass();
          $testLine->desc = 'Short description';
          $testLine->val = 'Val';
          $testLines[] = $testLine;
        }
        return $this->render(
          'IntechnologyBackendManagementBundle:Default:index.html.twig',
          array('testLines' => $testLines)
        );
    }

    public function fullNameAction() {
      $user = $this->getUser();
      return $this->render(
        'IntechnologyBackendManagementBundle:Default:fullName.html.twig',
        array('fullName' => $user->getFullName())
      );
    }
}
