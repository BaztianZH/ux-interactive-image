<?php

namespace BaztianZh\UX\InteractiveImage\Builder;

use BaztianZh\UX\InteractiveImage\Model\InteractiveImage;

interface InteractiveImageBuilderInterface
{
    public function createInteractiveImage(string $imagePath): InteractiveImage;
}