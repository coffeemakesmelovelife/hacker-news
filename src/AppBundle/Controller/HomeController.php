<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\Post;


class HomeController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

      $this->denyAccessUnlessGranted('ROLE_USER', null, 'unable to access this page.');
      $em = $this->getDoctrine()->getManager();
      $criteria = array('posted_at' => 'DESC');
      $sort_option = $request->query->get('sort_by');

      if ($sort_option == 'most_liked') {
        $criteria = array('upvote_count' => 'DESC');
      }

      $posts = $em->getRepository('AppBundle:Post')->findBy(array(), $criteria);

      return $this->render('default/index.html.twig', [
        'posts' => $posts
      ]);
    }

}
