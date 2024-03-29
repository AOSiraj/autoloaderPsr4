<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 6:35 PM
 */

namespace Aos\AutoloaderPsr4\Factory\Service;


use Aos\AutoloaderPsr4\Service\DequeueMessageService;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class DequeueMessageServiceFactory implements FactoryInterface
{
    public function __invoke($container, $requestedName, array $options = null)
    {
        // TODO: Implement __invoke() method.
        return new DequeueMessageService();
    }
}