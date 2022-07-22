<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class AudioItem extends MediaItem implements \JsonSerializable
{
    use CaptionTrait;
    use StickyTrait;
    use JsonSerializerTrait;

    public function __construct(int $left, int $top, string $path)
    {
        parent::__construct(Item::TYPE_AUDIO, $left, $top);
        $this->path = $path;
    }
}
