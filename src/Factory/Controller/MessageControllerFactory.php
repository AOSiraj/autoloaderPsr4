<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/8/2019
 * Time: 5:41 PM
 */

namespace Aos\AutoloaderPsr4\Factory\Controller;

use Aos\AutoloaderPsr4\Service\DequeueMessageService;
use Aos\AutoloaderPsr4\Controller\MessageController;
use Aos\AutoloaderPsr4\Service\EnqueueMessageService;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class MessageControllerFactory implements FactoryInterface
{
    public function __invoke( $container, $requestedName, array $options = null)
    {
        $dequeueMessageService =  $container->get(DequeueMessageService::class);
        $enqueueMessageService =  $container->get(EnqueueMessageService::class);
        return new MessageController($dequeueMessageService, $enqueueMessageService);
    }
}