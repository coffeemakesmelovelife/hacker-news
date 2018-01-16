<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

class HomeController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

      $this->denyAccessUnlessGranted('ROLE_USER', null, 'unable to access this page.');

      $users = $this->getDoctrine()
      ->getRepository(User::class)
      ->findAllUsers();

      var_dump($users);

      return $this->render('default/index.html.twig');
    }
}
