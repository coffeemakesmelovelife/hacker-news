<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\User;
use AppBundle\Entity\Post;
use AppBundle\Entity\Comment;

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
        $post->setUser($user);
        $post->setPostTitle($request->request->get('post_title'));
        $post->setPostBody($request->request->get('post_body'));
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

        $comments = $this->getDoctrine()
        ->getRepository(Comment::class)
        ->getPostComments($request->attributes->get('id'));
        var_dump($comments);
        return $this->render('default/showpost.html.twig', [
          'post' => $post[0],
          'comments' => $comments
        ]);
    }

    /**
      * @Route("/new-comment", name="newcomment")
      */
    public function addCommentAction(Request $request, UserInterface $user)
    {
       $this->denyAccessUnlessGranted('ROLE_USER', null, 'unable to access this page.');

       $ref = $request->headers->get('referer');
       var_dump($request->request->get('postid'));

       $post = $this->getDoctrine()
       ->getRepository(Post::class)
       ->findPostById($request->request->get('postid'));

       $comment = new Comment();

       $comment->setUser($user);
       $comment->setPost($post);
       $comment->setCommentText($request->request->get('comment'));
       $em = $this->getDoctrine()->getManager();
       $em->persist($comment);
       $em->flush();

       $this->addFlash(
         'success', 'Comment submitted.'
       );

       return $this->redirect($ref);

    }
}
