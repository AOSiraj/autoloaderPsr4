<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 5:46 PM
 */

namespace Aos\AutoloaderPsr4\Service\Test;


use Aos\AutoloaderPsr4\Service\EnqueueMessageService;
use PHPUnit\Framework\TestCase;

class ExqueueMessageServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }

    public function testEnqueue() {
        $service = new EnqueueMessageService();
        $expected = 'done';
        $this->assertEquals($expected, $service->enqueue('message'));
    }
}