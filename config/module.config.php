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
];