<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class VideoItem extends MediaItem
{
    use CaptionTrait;
    use StickyTrait;

    private ?string $poster;

    public function __construct(int $left, int $top, string $path)
    {
        parent::__construct(Item::TYPE_VIDEO, $left, $top);
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
