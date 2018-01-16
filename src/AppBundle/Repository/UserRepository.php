<?php

namespace AppBundle\Repository;

use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthAwareUserProviderInterface;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\User;

class UserRepository extends EntityRepository  implements OAuthAwareUserProviderInterface
{

  public function findAllUsers()
  {
    return $this->getEntityManager()
      ->createQuery(
        'SELECT u FROM AppBundle:User u'
        )
      ->getResult();
  }

  public function loadUserByOAuthUserResponse(UserResponseInterface $response)
  {

    $username = $response->getUsername();
    $email = $response->getEmail();
    $user = $this->getEntityManager()
                 ->createQuery(
                   "SELECT u FROM AppBundle:User u WHERE u.email='$email'"
                   )
                 ->getOneOrNullResult();

    if (null === $user) {
      $user = new User();
      $user->setUsername(strtolower(str_replace(' ', '', $response->getRealName())));
      $user->setEmail($response->getEmail());
      $em = $this->getEntityManager();
      $em->persist($user);
      $em->flush();
    }

    /*
    $user = $this->userManager->findUserBy(array($this->getProperty($response) => $username));
    //when the user is registrating
    if (null === $user) {
        $service = $response->getResourceOwner()->getName();
        $setter = 'set'.ucfirst($service);
        $setter_id = $setter.'Id';
        $setter_token = $setter.'AccessToken';
        // create new user here
        $user = $this->userManager->createUser();
        $user->$setter_id($username);
        $user->$setter_token($response->getAccessToken());
        //I have set all requested data with the user's username
        //modify here with relevant data
        $user->setUsername($username);
        $user->setEmail($username);
        $user->setPassword($username);
        $user->setEnabled(true);
        $this->userManager->updateUser($user);
        return $user;
    }
    //if user exists - go with the HWIOAuth way
    $user = parent::loadUserByOAuthUserResponse($response);
    $serviceName = $response->getResourceOwner()->getName();
    $setter = 'set' . ucfirst($serviceName) . 'AccessToken';
    //update access token
    $user->$setter($response->getAccessToken());
    */
    return $user;

  }



}
