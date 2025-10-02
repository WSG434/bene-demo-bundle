<?php
declare(strict_types=1);

namespace Bene\DemoBundle;

use Bene\DemoBundle\DependencyInjection\BeneDemoExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class BeneDemoBundle extends Bundle {

    public function getContainerExtension(): ExtensionInterface
    {
        return new BeneDemoExtension(); // важно
    }
}