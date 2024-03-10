<?php

namespace App\Service;

use App\Service\Interface\ServiceInterface;
use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;

class ServiceCollection
{
    public function __construct(
        #[TaggedIterator('yourtaghere', indexAttribute: 'key')]
        private readonly iterable $handlers
    ) {
    }

    public function getHandler(string $key): ServiceInterface
    {
        return ($this->handlers instanceof \Traversable ? iterator_to_array($this->handlers) : $this->handlers)[$key];
    }
}
