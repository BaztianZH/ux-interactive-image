<?php

namespace BaztianZh\UX\InteractiveImage\Model;

abstract class Item
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PICTURE = 'picture';
    public const TYPE_AUDIO = 'audio';
    public const TYPE_VIDEO = 'video';
    public const TYPE_PROVIDER = 'provider';

    protected string $type;
    protected Position $position;
    protected bool $sticky = false;
    protected string $customClassName = '';

    public function __construct(string $type, int $left, int $top)
    {
        $this->type = $type;
        $this->position = new Position($left, $top);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Position
     */
    public function getPosition(): Position
    {
        return $this->position;
    }

    /**
     * @param Position $position
     * @return Item
     */
    public function setPosition(Position $position): Item
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSticky(): bool
    {
        return $this->sticky;
    }

    /**
     * @param bool $sticky
     * @return self
     */
    public function setSticky(bool $sticky): self
    {
        $this->sticky = $sticky;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomClassName(): string
    {
        return $this->customClassName;
    }

    /**
     * @param string $customClassName
     * @return Item
     */
    public function setCustomClassName(string $customClassName): Item
    {
        $this->customClassName = $customClassName;
        return $this;
    }
}
