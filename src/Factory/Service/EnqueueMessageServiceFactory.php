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
use Zend\ServiceManager\Factory\FactoryInterface;

class EnqueueMessageServiceFactory
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return new EnqueueMessageService(new DoSomeThing());
    }

}