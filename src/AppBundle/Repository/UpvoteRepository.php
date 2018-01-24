<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Upvote;

class UpvoteRepository extends EntityRepository
{

  public function findUpvote($user_id, $post_id)
  {
    return $this->getEntityManager()
      ->createQuery(
        "SELECT u
         FROM AppBundle:Upvote u
         WHERE u.user = :user_id
         AND u.post = :post_id"
        )
      ->setParameter('user_id', $user_id)
      ->setParameter('post_id', $post_id)
      ->getOneOrNullResult();
  }


}
