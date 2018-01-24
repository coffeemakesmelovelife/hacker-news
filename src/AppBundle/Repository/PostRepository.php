<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Post;

class PostRepository extends EntityRepository
{

  /**
   * get all posts
   *
   * @return array
   */
  public function findAllPosts()
  {
    return $this->getEntityManager()
      ->createQuery(
        'SELECT p, u.username
         FROM AppBundle:Post p
         JOIN p.user u
         ORDER BY p.posted_at ASC'
        )
      ->getArrayResult();
  }

  /**
   * get one by id
   *
   * @param integer $id
   *
   * @return array
   */
  public function findOneById($id)
  {
    return $this->getEntityManager()
    ->createQuery(
      "SELECT p, u.username
       FROM AppBundle:Post
       p JOIN p.user u
        WHERE p.id = id"
      )
      ->setParameter('id', $id)
      ->getArrayResult();
  }

  /**
   * get one by id
   *
   * @param integer $id
   *
   * @return object or null
   */
  public function findPostById($id)
  {
    return $this->getEntityManager()
    ->createQuery(
      "SELECT p
       FROM AppBundle:Post
       p WHERE p.id = :id"
      )
      ->setParameter('id', $id)
      ->getOneOrNullResult();
  }


}
