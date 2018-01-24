<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SymfonyComponentValidatorConstraints as Assert;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Post
{

  /**
   * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
   * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
   */
   private $user;

   /**
    * @ORM\OneToMany(targetEntity="Comment", mappedBy="post")
    * @ORM\JoinColumn(name="comment_id", referencedColumnName="id")
    */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="Upvote", mappedBy="post")
     * @ORM\JoinColumn(name="upvote_id", referencedColumnName="id")
     */
     private $upvotes;

  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @ORM\Column(name="post_title", type="string", length=255, unique=false)
   */
  private $post_title;

  /**
   * @var string
   *
   * @ORM\Column(name="post_body", type="text", unique=false)
   */
  private $post_body;

  /**
   * @var string
   *
   * @ORM\Column(name="upvote_count", type="integer", unique=false)
   */
  private $upvote_count = 0;


  /**
   * @var string
   *
   * @ORM\Column(name="comment_count", type="integer", unique=false)
   */
  private $comment_count = 0;


  /**
   * @var string
   *
   * @ORM\Column(name="posted_at", type="datetime")
   */
  private $posted_at;


  /**
   * @ORM\PrePersist
   */

  public function setPostedAt(){
    $this->posted_at = new \DateTime('now');
  }


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
     * Set postTitle
     *
     * @param string $postTitle
     *
     * @return Post
     */
    public function setPostTitle($postTitle)
    {
        $this->post_title = $postTitle;

        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->post_title;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Post
     */
    public function setPostBody($post_body)
    {
        $this->post_body = $post_body;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getPostBody()
    {
        return $this->post_body;
    }

    /**
     * Get postedAt
     *
     * @return \DateTime
     */
    public function getPostedAt()
    {
        return $this->posted_at;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Post
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
     * Get comments
     *
     * @return Comment
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * liked by current user
     *
     * @param integer $user_id
     *
     * @return boolean
     */
    public function likedByCurrentUser($user_id)
    {
      for ($i=0; $i < count($this->upvotes); $i++) {
        if ($user_id == $this->upvotes[$i]->getUser()->getId()) {
          return true;
        }
      }
      return false;
    }

    /**
     * get upvotesCount
     *
     * @return integer
     */
    public function getUpvotesCount()
    {
      return count($this->upvotes);
    }

    /**
     * Get commentsCount
     *
     * @return Comment
     */
    public function getCommentsCount()
    {
      return count($this->comments);
    }

    /**
     * Increment upvote_count
     *
     * @return $this
     */
    public function incrUpvote()
    {
      $this->upvote_count++;
      return $this;
    }

    /**
     * Decrement upvote_count
     *
     * @return $this
     */
    public function decrUpvote()
    {
      $this->upvote_count--;
      return $this;
    }
}
