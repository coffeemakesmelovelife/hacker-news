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
        'SELECT p FROM AppBundle:Post p'
        )
      ->getArrayResult();
  }

  public function findOneById($id)
  {
    return $this->getEntityManager()
    ->createQuery(
      "SELECT p FROM AppBundle:Post p WHERE p.id = '$id'"
      )->getArrayResult();
  }


}
