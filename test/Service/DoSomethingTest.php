<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 7:57 PM
 */

namespace Aos\AutoloaderPsr4\Service\Test;


use Aos\AutoloaderPsr4\Service\DoSomeThing;
use PHPUnit\Framework\TestCase;
use Mockery as m;

class DoSomethingTest extends TestCase
{
    public function testCanInstantiateAnaObject() {
        $this->assertNotNull(new DoSomeThing());
    }

    public function getPartialMock() {
        return m::mock(DoSomeThing::class)->makePartial();
    }

    public function testAnything() {
        $svc = new DoSomeThing();
        $this->assertEquals('Nope!!!', $svc->anything());
    }

    public function testJustForeTest() {
        $svc = $this->getPartialMock();
        $svc->shouldReceive('anything')->andReturn('test');
        $this->assertEquals('test', $svc->justForTest());
    }
}