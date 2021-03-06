<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Comment;

class CommentRepository extends EntityRepository
{
  
  /**
   * get post comments
   *
   * @param integer $postid
   *
   * @return array
   */
  public function getPostComments($postid){
    return $this->getEntityManager()
    ->createQuery(
      "SELECT c, u.username
       FROM AppBundle:Comment c
       JOIN c.user u
       WHERE c.post = :id"
      )
      ->setParameter('id', $postid)
      ->getArrayResult();
  }

}
