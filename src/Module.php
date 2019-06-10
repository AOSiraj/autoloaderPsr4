<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 3:00 AM
 */

namespace Aos\AutoloaderPsr4;

use Aos\AutoloaderPsr4\Controller\MessageController;
use Aos\AutoloaderPsr4\Factory\Controller\MessageControllerFactory;
use Aos\AutoloaderPsr4\Factory\Service\DequeueMessageServiceFactory;
use Aos\AutoloaderPsr4\Factory\Service\EnqueueMessageServiceFactory;
use Aos\AutoloaderPsr4\Service\DequeueMessageService;
use Aos\AutoloaderPsr4\Service\EnqueueMessageService;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{


    public function getConfig()
    {
        return array_merge(include __DIR__ . '/../config/module.config.php', $this->getControllerConfig(), $this->getServiceConfig());
    }

    public function getControllerConfig()
    {
        return [
            'controllers' => [
                'factories' => [
                    MessageController::class => MessageControllerFactory::class,
                ]
            ]
        ];
    }

    public function getServiceConfig()
    {
        return [
            'service_manager' => [
                'factories' => [
                    EnqueueMessageService::class => EnqueueMessageServiceFactory::class,
                    DequeueMessageService::class => DequeueMessageServiceFactory::class
                ]
            ]
        ];
    }
}