<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 3:56 PM
 */

namespace Aos\AutoloaderPsr4\Test;


use Aos\AutoloaderPsr4\Controller\MessageController;
use Aos\AutoloaderPsr4\Service\DequeueMessageService;
use Aos\AutoloaderPsr4\Service\EnqueueMessageService;
use PHPUnit\Framework\TestCase;
use Zend\View\Model\JsonModel;
use Mockery as m;

class MessageControllerTest extends TestCase
{
    private $dequeueMessageService;
    private $enqueueMessageService;


    public function __construct()
    {
        parent::__construct();
        $this->dequeueMessageService = m::mock(DequeueMessageService::class);
        $this->enqueueMessageService = m::mock(EnqueueMessageService::class);
    }

    public function testcanInstantiateMessageController()
    {
        $this->assertNotNull(new MessageController($this->dequeueMessageService, $this->enqueueMessageService));
    }


    public function testCanHandleDequeueAction() {
        $this->dequeueMessageService->shouldReceive('dequeue')
            ->andReturn('this is a test')->once();
        $messageController = new MessageController($this->dequeueMessageService, $this->enqueueMessageService);
        $expected = new JsonModel(['success' => 'this is a test']);
        $this->assertEquals($expected, $messageController->dequeueAction());
    }

    public function testCanThrowExceptionOnDequeueAction() {
        $this->dequeueMessageService
            ->shouldReceive('dequeue')
            ->andReturnUsing(
                function () {throw new \Exception('test');}
                )->once();
        $messageController = new MessageController($this->dequeueMessageService, $this->enqueueMessageService);
        $this->expectExceptionMessage('test');
        $messageController->dequeueAction();
    }

    public function testCanHandleEnqueueAction() {
        $this->enqueueMessageService->shouldReceive('enqueue')
            ->withArgs(['message'])->andReturn('done')->once();
        $messageController = new MessageController($this->dequeueMessageService,$this->enqueueMessageService);
        $expected = new JsonModel([
            'success' => 'done'
        ]);
        $this->assertEquals($expected, $messageController->enqueueAction());
    }

    public function testCanThrowExceptionOnEnqueueAction() {
        $this->enqueueMessageService->shouldReceive('enqueue')
            ->andThrow(new \Exception('test'))->once();
        $messageController = new MessageController($this->dequeueMessageService,$this->enqueueMessageService);
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('test');
        $messageController->enqueueAction();
    }
}