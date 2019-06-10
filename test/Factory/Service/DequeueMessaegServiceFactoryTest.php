<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 8:05 PM
 */

namespace Aos\AutoloaderPsr4\Factory\Service\Test;

use Aos\AutoloaderPsr4\Factory\Service\DequeueMessageServiceFactory;
use Aos\AutoloaderPsr4\Service\DequeueMessageService;
use Interop\Container\ContainerInterface;
use PHPUnit\Framework\TestCase;
use Mockery as m;

class DequeueMessaegServiceFactoryTest extends TestCase
{
    public $container = null;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->container = m::mock(ContainerInterface::class);
    }

    public function testCanInvoke() {
        $reflectionClass = new \ReflectionClass(DequeueMessageServiceFactory::class);
        $reflectionMethod = $reflectionClass->getMethod('__invoke');
        $reflectionMethod->setAccessible(true);
        $actual = $reflectionMethod->invokeArgs(new DequeueMessageServiceFactory(), [$this->container, '', null]);
        $this->assertInstanceOf(DequeueMessageService::class, $actual);
    }
}