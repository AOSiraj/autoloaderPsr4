<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 8:14 PM
 */

namespace Aos\AutoloaderPsr4\Factory\Service\Test;


use Aos\AutoloaderPsr4\Factory\Service\EnqueueMessageServiceFactory;
use Aos\AutoloaderPsr4\Service\DoSomeThing;
use Aos\AutoloaderPsr4\Service\EnqueueMessageService;
use Interop\Container\ContainerInterface;
use PHPUnit\Framework\TestCase;
use Mockery as m;

class EnqueueMessaegServiceFactoryTest extends TestCase
{
    public $container;
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->container = m::mock(ContainerInterface::class);
    }

    public function testCanInvoke() {
        $reflectionClass = new \ReflectionClass(EnqueueMessageServiceFactory::class);
        $reflectionMethod = $reflectionClass->getMethod('__invoke');
        $reflectionMethod->setAccessible(true);
        $actual = $reflectionMethod->invokeArgs(new EnqueueMessageServiceFactory(), [$this->container, '' , null]);
        $this->assertEquals(new EnqueueMessageService(new DoSomeThing()),$actual);
    }
}