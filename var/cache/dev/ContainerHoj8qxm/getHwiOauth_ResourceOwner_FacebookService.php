<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.resource_owner.facebook' shared service.

include_once $this->targetDirs[3].'/vendor/hwi/oauth-bundle/OAuth/RequestDataStorageInterface.php';
include_once $this->targetDirs[3].'/vendor/hwi/oauth-bundle/OAuth/RequestDataStorage/SessionStorage.php';
include_once $this->targetDirs[3].'/vendor/hwi/oauth-bundle/OAuth/ResourceOwnerInterface.php';
include_once $this->targetDirs[3].'/vendor/hwi/oauth-bundle/OAuth/ResourceOwner/AbstractResourceOwner.php';
include_once $this->targetDirs[3].'/vendor/hwi/oauth-bundle/OAuth/ResourceOwner/GenericOAuth2ResourceOwner.php';
include_once $this->targetDirs[3].'/vendor/hwi/oauth-bundle/OAuth/ResourceOwner/FacebookResourceOwner.php';

return $this->services['hwi_oauth.resource_owner.facebook'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner(${($_ = isset($this->services['hwi_oauth.http_client']) ? $this->services['hwi_oauth.http_client'] : $this->load(__DIR__.'/getHwiOauth_HttpClientService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, array('client_id' => 2073757292641496, 'client_secret' => '5d50cccedb35eeec2259c50c09d0663f', 'scope' => 'email', 'infos_url' => 'https://graph.facebook.com/me?fields=id,name,email', 'options' => array('csrf' => true), 'paths' => array()), 'facebook', new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load(__DIR__.'/getSessionService.php')) && false ?: '_'}));