<?php

namespace App\Service\Interface;

use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag('yourtaghere')]
interface ServiceInterface
{
    public function doSomething(): string;
}
