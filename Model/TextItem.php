<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class TextItem extends Item implements \JsonSerializable
{
    use JsonSerializerTrait;

    private string $title;
    private string $description;
    private ?string $picturePath = null;
    private ?Link $link = null;

    public function __construct(int $left, int $top, string $title, string $description)
    {
        parent::__construct(Item::TYPE_TEXT, $left, $top);
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return ?string
     */
    public function getPicturePath(): ?string
    {
        return $this->picturePath;
    }

    /**
     * @param ?string $picturePath
     * @return TextItem
     */
    public function setPicturePath(?string $picturePath): TextItem
    {
        $this->picturePath = $picturePath;
        return $this;
    }

    /**
     * @return ?Link
     */
    public function getLink(): ?Link
    {
        return $this->link;
    }

    /**
     * @param ?Link $link
     * @return TextItem
     */
    public function setLink(?Link $link): TextItem
    {
        $this->link = $link;
        return $this;
    }
}
