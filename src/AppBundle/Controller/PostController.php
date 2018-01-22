<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\User;
use AppBundle\Entity\Post;
use AppBundle\Entity\Comment;
use AppBundle\Entity\Upvote;

class PostController extends Controller
{

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

        $em = $this->getDoctrine()->getManager();
        $post = $em->find('AppBundle:Post', $request->attributes->get('id'));

        return $this->render('default/showpost.html.twig', [
          'post' => $post
        ]);
    }

    /**
      * @Route("/new-comment", name="newcomment")
      */
    public function addCommentAction(Request $request, UserInterface $user)
    {
       $this->denyAccessUnlessGranted('ROLE_USER', null, 'unable to access this page.');

       $ref = $request->headers->get('referer');

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


    /**
      * @Route("/downvote-post", name="downvotepost")
      */
    public function downvotePostAction(Request $request, UserInterface $user)
    {

      try {

        $em = $this->getDoctrine()->getManager();
        $upvote = $em->getRepository(Upvote::class)->findUpvote($request->request->get('user_id'), $request->request->get('post_id'));
        $post = $this->getDoctrine()
        ->getRepository(Post::class)
        ->findPostById($request->request->get('post_id'));
        $upvote->decrUpvote($post);
        $em->remove($upvote);
        $em->flush();

        return new JsonResponse('success');

      } catch (Exception $e) {

        return new JsonResponse('failure');
      }


    }

    /**
      * @Route("/upvote-post", name="upvotepost")
      */
    public function upvotePostAction(Request $request, UserInterface $user)
    {

      try {
        $upvote = new Upvote();

        $post = $this->getDoctrine()
        ->getRepository(Post::class)
        ->findPostById($request->request->get('id'));

        $upvote->setUser($user);
        $upvote->setPost($post);
        $upvote->incrUpvote($post);

        $em = $this->getDoctrine()->getManager();
        $em->persist($upvote);
        $em->flush();

        return new JsonResponse('success');

      } catch (Exception $e) {

        return new JsonResponse('failure');
      }


    }
}
