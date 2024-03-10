<?php

namespace App\Service;

use App\Service\Interface\ServiceInterface;

class Bar implements ServiceInterface
{
    public string $key = __CLASS__;

    public function doSomething(): string
    {
        return 'this is ' . __CLASS__ . ':' . __FUNCTION__;
    }
}
