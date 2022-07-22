<?php

namespace BaztianZh\UX\InteractiveImage\Model;

trait JsonSerializerTrait
{
    public function jsonSerialize(): array
    {
        return array_filter(get_object_vars($this), function ($item) {
            return null !== $item;
        });
    }
}