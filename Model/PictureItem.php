<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class PictureItem extends MediaItem implements \JsonSerializable
{
    public function __construct(int $left, int $top, string $path)
    {
        parent::__construct(Item::TYPE_PICTURE, $left, $top);
        $this->path = $path;
    }

    public function jsonSerialize()
    {
        return [
            'type' => $this->type,
            'position' => $this->position,
            'path' => $this->path,
            'customClassName' => $this->customClassName
        ];
    }
}
