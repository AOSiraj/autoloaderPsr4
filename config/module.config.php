<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 3:06 AM
 */

return [
    'router' => [
        'routes' => [
            'message' => [
                'type'    => \Zend\Router\Http\Segment::class,
                'options' => [
                    'route'    => '/message[/:action]',
                    'defaults' => [
                        'controller' => \Aos\AutoloaderPsr4\Controller\MessageController::class,
                        'action'     => 'dequeue',
                    ],
                ],
            ],
        ]
    ],
    'controllers' => [
        'factories' => [
            \Aos\AutoloaderPsr4\Controller\MessageController::class => \Aos\AutoloaderPsr4\Factory\MessageControllerFactory::class,
        ]
    ],
    'service_manager' => [
        'factories' => [
            \Aos\AutoloaderPsr4\Service\DequeueMessageService::class => function () {
                return new \Aos\AutoloaderPsr4\Service\DequeueMessageService();
            },
            \Aos\AutoloaderPsr4\Service\EnqueueMessageService::class => function () {
                return new \Aos\AutoloaderPsr4\Service\EnqueueMessageService();
            }
        ]
    ]
];