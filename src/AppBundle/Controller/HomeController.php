<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\Post;


class HomeController extends Controller
{

    /**
     * @Route("/", defaults={"page": 1}, name="homepage")
     * @Route("/page/{page}", defaults={"page": 1}, name="pages")
     */
    public function indexAction(Request $request, $page)
    {

      $this->denyAccessUnlessGranted('ROLE_USER', null, 'unable to access this page.');

      $em = $this->getDoctrine()->getManager();
      $criteria = array('posted_at' => 'DESC');
      $sort_option = $request->query->get('sort_by');

      if ($sort_option == 'most_liked') {
        $criteria = array('upvote_count' => 'DESC');
      }

      $posts = $em->getRepository('AppBundle:Post')->findBy(array(), $criteria);

      $page_size = 5;
      $num_pages = ceil(count($posts)/$page_size);
      $postlist = array_slice($posts, ($page-1)*$page_size, $page_size);
      if (count($postlist) == 0) {
        return new JsonResponse('no more');
      }
      return $this->render('default/index.html.twig', [
        'posts' => $postlist
      ]);
    }

}
