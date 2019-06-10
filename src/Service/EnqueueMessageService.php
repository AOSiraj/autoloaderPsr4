<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 1:24 AM
 */

namespace Aos\AutoloaderPsr4\Service;


class EnqueueMessageService implements EnqueueMessageInterface
{
    public $doSomething;

    /**
     * EnqueueMessageService constructor.
     * @param $doSomething
     */
    public function __construct($doSomething)
    {
        $this->doSomething = $doSomething;
    }

    public function enqueue($message)
    {
        return 'done';
    }
}