<?php

namespace ContainerN3gexYZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVeilleControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tg.Vi1T.App\Controller\VeilleController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tg.Vi1T.App\\Controller\\VeilleController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'veilleRepository' => ['privates', 'App\\Repository\\VeilleRepository', 'getVeilleRepositoryService', true],
        ], [
            'veilleRepository' => 'App\\Repository\\VeilleRepository',
        ]))->withContext('App\\Controller\\VeilleController::index()', $container);
    }
}
