<?php

namespace BaztianZh\UX\InteractiveImage\Model;

abstract class MediaItem extends Item
{
    protected string $path;

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return MediaItem
     */
    public function setPath(string $path): self
    {
        $this->path = $path;
        return $this;
    }
}
