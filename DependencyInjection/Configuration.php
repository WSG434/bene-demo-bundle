<?php
declare(strict_types=1);

// src/DependencyInjection/Configuration.php
namespace Bene\DemoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $tree = new TreeBuilder('bene_demo');
        $tree->getRootNode()
            ->children()
            ->scalarNode('greeting')->defaultValue('Hello')->end()
            ->end();
        return $tree;
    }
}