<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 1:22 AM
 */

namespace Aos\Autoloader\Service;


interface DequeueMessageInterface
{
    public function dequeue() ;
}