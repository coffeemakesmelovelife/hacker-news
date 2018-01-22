<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Post;

class PostRepository extends EntityRepository
{

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

  public function findOneById($id)
  {
    return $this->getEntityManager()
    ->createQuery(
      "SELECT p, u.username
       FROM AppBundle:Post
       p JOIN p.user u
        WHERE p.id = '$id'"
      )->getArrayResult();
  }

  public function findPostById($id)
  {
    return $this->getEntityManager()
    ->createQuery(
      "SELECT p
       FROM AppBundle:Post
       p WHERE p.id = '$id'"
      )->getOneOrNullResult();
  }


}
