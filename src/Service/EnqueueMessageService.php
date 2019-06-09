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
    public function enqueue($message)
    {
        return 'done';
    }
}