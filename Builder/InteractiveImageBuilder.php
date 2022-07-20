<?php

namespace BaztianZh\UX\InteractiveImage\Builder;

use BaztianZh\UX\InteractiveImage\Model\InteractiveImage;

class InteractiveImageBuilder implements InteractiveImageBuilderInterface
{
    public function createInteractiveImage(string $imagePath): InteractiveImage
    {
        return new InteractiveImage($imagePath);
    }
}