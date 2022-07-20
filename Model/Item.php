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
    protected string $customClassName = '';

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
