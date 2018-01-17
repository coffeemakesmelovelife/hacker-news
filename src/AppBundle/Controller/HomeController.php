<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\User;
use AppBundle\Entity\Post;

class HomeController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

      $this->denyAccessUnlessGranted('ROLE_USER', null, 'unable to access this page.');

      $posts = $this->getDoctrine()
      ->getRepository(Post::class)
      ->findAllPosts();

      return $this->render('default/index.html.twig', [
        'posts' => $posts
      ]);
    }

    /**
     * @Route("/new-post", name="newpost")
     */
    public function newPostAction(Request $request, UserInterface $user)
    {

      $this->denyAccessUnlessGranted('ROLE_USER', null, 'unable to access this page.');

      if ($request->getMethod() == 'POST') {
        $post = new Post();
        $post_title = $request->request->get('post_title');
        $post_body = $request->request->get('post_body');
        $post->setUser($user);
        $post->setPostTitle($post_title);
        $post->setPostBody($post_body);
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        $this->addFlash(
          'success', 'Post submitted.'
        );

        return $this->redirectToRoute('homepage');
      }


      return $this->render('default/newpost.html.twig');
    }

    /**
     * @Route("/post/{id}", name="showpost")
     */
    public function showPostAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'unable to access this page.');

        $post = $this->getDoctrine()
        ->getRepository(Post::class)
        ->findOneById($request->attributes->get('id'));

        return $this->render('default/showpost.html.twig', [
          'post' => $post[0]
        ]);
    }

}
