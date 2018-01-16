<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends Controller
{
    /**
     * @Route("/register", name="register")
     */
    public function indexAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

      if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
          return new RedirectResponse('/');
      }

      $user = new User();
      $form = $this->createForm(UserType::class, $user);
      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $password = $passwordEncoder->encodePassword($user, $user->getPassword());

        $user->setPassword($password);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();



        return $this->redirectToRoute('login');
      }

          return $this->render('default/register.html.twig', [
        'form' => $form->createView()
      ]);
    }
}
