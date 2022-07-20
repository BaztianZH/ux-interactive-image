<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class AudioItem extends MediaItem
{
    use CaptionTrait;
    use StickyTrait;

    public function __construct(string $path)
    {
        $this->type = self::TYPE_AUDIO;
        $this->path = $path;
    }
}
