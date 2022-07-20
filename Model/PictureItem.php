<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class PictureItem extends MediaItem implements \JsonSerializable
{
    public function __construct(string $path)
    {
        $this->type = self::TYPE_PICTURE;
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
