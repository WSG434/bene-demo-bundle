<?php
declare(strict_types=1);

// src/Controller/HelloController.php
namespace Bene\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

final class HelloController
{
    public function __construct(private Environment $twig, private string $greeting) {}

    #[Route('/bene-demo/hello', name: 'bene_demo_hello')]
    public function __invoke(): Response
    {
        return new Response($this->twig->render('@BeneDemo/hello.html.twig', [
            'greeting' => $this->greeting,
        ]));
    }
}