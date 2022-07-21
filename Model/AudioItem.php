<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class AudioItem extends MediaItem
{
    use CaptionTrait;
    use StickyTrait;

    public function __construct(int $left, int $top, string $path)
    {
        parent::__construct(Item::TYPE_AUDIO, $left, $top);
        $this->path = $path;
    }
}
