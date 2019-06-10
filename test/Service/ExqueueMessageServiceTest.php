<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 5:46 PM
 */

namespace Aos\AutoloaderPsr4\Service\Test;


use Aos\AutoloaderPsr4\Service\DoSomeThing;
use Aos\AutoloaderPsr4\Service\EnqueueMessageService;
use PHPUnit\Framework\TestCase;
use Mockery as m;
class ExqueueMessageServiceTest extends TestCase
{
    public $dosomething = null;
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->dosomething = m::mock(DoSomeThing::class);

    }

    public function testEnqueue() {
        $this->dosomething->shouldReceive('anything')->andReturn('Nope!!!');
        $service = new EnqueueMessageService($this->dosomething);
        $expected = 'done';
        $this->assertEquals($expected, $service->enqueue('message'));
    }
}