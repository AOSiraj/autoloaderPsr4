<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 3:00 AM
 */

namespace Aos\AutoloaderPsr4;


class Module
{
    public function getConfig() {
        return include __DIR__.'/../config/module.config.php';
    }
}