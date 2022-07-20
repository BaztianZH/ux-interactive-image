<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class VideoItem extends MediaItem
{
    use CaptionTrait;
    use StickyTrait;

    private ?string $poster;

    public function __construct(string $path)
    {
        $this->type = self::TYPE_VIDEO;
        $this->path = $path;
    }

    /**
     * @return ?string
     */
    public function getPoster(): ?string
    {
        return $this->poster;
    }

    /**
     * @param ?string $poster
     * @return self
     */
    public function setPoster(?string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }
}
