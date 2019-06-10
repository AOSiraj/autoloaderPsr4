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
use Aos\AutoloaderPsr4\Factory\Service\EnqueueMessageServiceFactory;
use Aos\AutoloaderPsr4\Service\DequeueMessageService;
use Aos\AutoloaderPsr4\Service\EnqueueMessageService;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getControllerConfig()
    {
        return [
            'factories' => [
                MessageController::class => MessageControllerFactory::class,
            ]
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                EnqueueMessageService::class => EnqueueMessageServiceFactory::class,
                DequeueMessageService::class => DequeueMessageService::class
            ]
        ];
    }
}