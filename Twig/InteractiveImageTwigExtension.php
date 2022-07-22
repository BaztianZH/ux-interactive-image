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
use Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * @final
 * @experimental
 */
class InteractiveImageTwigExtension extends AbstractExtension
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
        $controllers['@baztianzh/ux-interactive-image/interactive-image'] = ['view' => $image->createView()];

        $class = $attributes['class'] ?? '';

        return trim('<div class="'. $class .'"'. $this->stimulus->renderStimulusController($env, $controllers)). '></div>';
    }
}
