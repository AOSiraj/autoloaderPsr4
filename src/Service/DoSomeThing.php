<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 6:45 PM
 */

namespace Aos\AutoloaderPsr4\Service;


class DoSomeThing
{
    public function anything() {
        return "Nope!!!";
    }

    public function justForTest() {
        return $this->anything();
    }
}