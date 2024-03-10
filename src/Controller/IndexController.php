<?php

namespace App\Controller;
use App\Service\Bar;
use App\Service\Foo;
use App\Service\ServiceCollection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
class IndexController
{
    public function __construct(
        private readonly ServiceCollection $serviceCollection,
    ) {

    }

    #[Route(
        path: '/',
        methods: [Request::METHOD_GET],
    )]
    public function __invoke(): JsonResponse
    {
        $output = [
            'Bar' => $this->serviceCollection->getHandler(Bar::class)->doSomething(),
            'Foo' => $this->serviceCollection->getHandler(Foo::class)->doSomething(),
        ];

        return new JsonResponse($output);
    }
}
