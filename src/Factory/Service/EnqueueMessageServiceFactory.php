<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 6:35 PM
 */

namespace Aos\AutoloaderPsr4\Factory\Service;


use Aos\AutoloaderPsr4\Service\DequeueMessageService;
use Aos\AutoloaderPsr4\Service\DoSomeThing;
use Aos\AutoloaderPsr4\Service\EnqueueMessageService;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class EnqueueMessageServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // TODO: Implement __invoke() method.
        var_dump("I was here");
        return new EnqueueMessageService(new DoSomeThing());
    }
}