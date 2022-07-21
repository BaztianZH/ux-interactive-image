<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BaztianZh\UX\InteractiveImage\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\UX\Chartjs\Builder\ChartBuilder;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Twig\ChartExtension;
use Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension;
use Twig\Environment;
use BaztianZh\UX\InteractiveImage\Twig\InteractiveImageExtension;

/**
 * @internal
 */
class InteractiveImageExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        if (class_exists(Environment::class) && class_exists(StimulusTwigExtension::class)) {
            $container
                ->setDefinition('interactive_image.twig_extension', new Definition(InteractiveImageExtension::class))
                ->addArgument(new Reference('webpack_encore.twig_stimulus_extension'))
                ->addTag('twig.extension')
                ->setPublic(false)
            ;
        }
    }
}
