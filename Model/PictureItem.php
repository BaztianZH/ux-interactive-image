<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class PictureItem extends MediaItem implements \JsonSerializable
{
    use JsonSerializerTrait;

    public function __construct(int $left, int $top, string $path)
    {
        parent::__construct(Item::TYPE_PICTURE, $left, $top);
        $this->path = $path;
    }
}
