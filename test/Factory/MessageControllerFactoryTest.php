<?php namespace Aos\AutoloaderPsr4\Factory\Test;
use Aos\AutoloaderPsr4\Controller\MessageController;
use Aos\AutoloaderPsr4\Factory\MessageControllerFactory;
use Aos\AutoloaderPsr4\Service\DequeueMessageService;
use Aos\AutoloaderPsr4\Service\EnqueueMessageService;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Mockery as m;

/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 5:56 PM
 */

class MessageControllerFactoryTest extends TestCase
{
    public $DequeueMessageService;
    public $EnqueueMessageService;
    public $container;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->DequeueMessageService = m::mock(DequeueMessageService::class);
        $this->EnqueueMessageService = m::mock(EnqueueMessageService::class);
        $this->container = m::mock(ContainerInterface::class);
        $this->container->shouldReceive('get')->withArgs([DequeueMessageService::class])->andReturn($this->DequeueMessageService)->once();
        $this->container->shouldReceive('get')->withArgs([EnqueueMessageService::class])->andReturn($this->EnqueueMessageService)->once();
    }


    public function testInvoke() {
//        $factory = m::mock(MessageController::class)->makePartial();
        $factoryReflection = new \ReflectionClass(MessageControllerFactory::class);
        $__invokeReflection = $factoryReflection->getMethod('__invoke');
        $__invokeReflection->setAccessible(true);
        $value = $__invokeReflection->invokeArgs(new MessageControllerFactory(), [$this->container, '', null]);
//        $factor
        $this->assertInstanceOf(MessageController::class, $value);
    }
}