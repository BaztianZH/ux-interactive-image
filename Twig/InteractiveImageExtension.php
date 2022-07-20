<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BaztianZh\UX\InteractiveImage\Twig;

use BaztianZh\UX\InteractiveImage\Model\InteractiveImage;
use Symfony\UX\Chartjs\Model\Chart;
use Symfony\WebpackEncoreBundle\Dto\StimulusControllersDto;
use Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * @final
 * @experimental
 */
class InteractiveImageExtension extends AbstractExtension
{
    private $stimulus;

    public function __construct(StimulusTwigExtension $stimulus)
    {
        $this->stimulus = $stimulus;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('render_interactive_image', [$this, 'renderInteractiveImage'], ['needs_environment' => true, 'is_safe' => ['html']]),
        ];
    }

    public function renderInteractiveImage(Environment $env, InteractiveImage $image, array $attributes = []): string
    {
        $controllers['@baztianzh/interactive-image/image'] = ['view' => $image->createView()];

        return trim('<div class="col-lg-12 col-md-12 col-sm-12"'.$this->stimulus->renderStimulusController($env, $controllers)).'></div>';
    }
}
