<?php
declare(strict_types=1);

namespace Bene\DemoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Configuration;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class BeneDemoExtension extends Extension
{
public function load(array $configs, ContainerBuilder $container): void
{
$configuration = new Configuration();
$config = $this->processConfiguration($configuration, $configs);

$loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
$loader->load('services.yaml');

// пример: прокинуть параметр в сервисы
$container->setParameter('bene_demo.greeting', $config['greeting']);
}
}