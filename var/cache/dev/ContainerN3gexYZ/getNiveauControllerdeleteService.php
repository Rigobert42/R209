<?php

namespace ContainerN3gexYZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNiveauControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Pe1VYp3.App\Controller\NiveauController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.Pe1VYp3'] ?? $container->load('get_ServiceLocator_Pe1VYp3Service'));

        if (isset($container->privates['.service_locator.Pe1VYp3.App\\Controller\\NiveauController::delete()'])) {
            return $container->privates['.service_locator.Pe1VYp3.App\\Controller\\NiveauController::delete()'];
        }

        return $container->privates['.service_locator.Pe1VYp3.App\\Controller\\NiveauController::delete()'] = $a->withContext('App\\Controller\\NiveauController::delete()', $container);
    }
}