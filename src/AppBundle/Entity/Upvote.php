<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SymfonyComponentValidatorConstraints as Assert;
use AppBundle\Entity\Post;

/**
 * Upvote
 *
 * @ORM\Table(name="upvote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UpvoteRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Upvote
{

  /**
  * @ORM\ManyToOne(targetEntity="Post", inversedBy="upvotes")
  * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
  */
  private $post;

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="upvotes")
   * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
   */
   private $user;

  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return Upvote
     */
    public function setPost(\AppBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Upvote
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Increment upvote_count
     *
     * @param Post
     *
     * @return $this
     */
     public function incrUpvote(\AppBundle\Entity\Post $post = null)
     {
       $post->incrUpvote();
       return $this;
     }

     /**
      * Decrement upvote_count
      *
      * @param Post
      *
      * @return $this
      */
     public function decrUpvote(\AppBundle\Entity\Post $post = null)
     {
       $post->decrUpvote();
       return $this;
     }
}
