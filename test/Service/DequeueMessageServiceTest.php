<?php namespace Aos\AutoloaderPsr4\Service\Test;
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 5:41 PM
 */

use Aos\AutoloaderPsr4\Service\DequeueMessageService;
use PHPUnit\Framework\TestCase;

class DequeueMessageServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }

    public function testDequeue() {
        $service = new DequeueMessageService();
        $expected = 'this is your message';
        $this->assertEquals($expected, $service->dequeue());
    }
}