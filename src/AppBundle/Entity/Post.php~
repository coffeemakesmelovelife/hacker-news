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
}
