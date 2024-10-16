<?php

namespace Container0lKb7Qa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_AccessToken_ApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.access_token.api' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\AccessTokenAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AccessTokenAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessToken/AccessTokenHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Security/AccessTokenHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessToken/AccessTokenExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessToken/HeaderAccessTokenExtractor.php';

        return $container->privates['security.authenticator.access_token.api'] = new \Symfony\Component\Security\Http\Authenticator\AccessTokenAuthenticator(new \App\Security\AccessTokenHandler(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService'))), new \Symfony\Component\Security\Http\AccessToken\HeaderAccessTokenExtractor(), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), NULL, NULL, NULL);
    }
}
