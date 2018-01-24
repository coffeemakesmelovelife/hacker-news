<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function indexAction(Request $request, AuthenticationUtils $authenticationutils)
    {

      $user = new User();

      $errors = $authenticationutils->getLastAuthenticationError();

      $lastUser = $authenticationutils->getLastUsername();

      return $this->render('default/login.html.twig', [
        'errors' => $errors,
        'lastUser' => $lastUser
      ]);
    }
}
