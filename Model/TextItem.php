<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class TextItem extends Item implements \JsonSerializable
{
    use StickyTrait;

    private string $title;
    private string $description;
    private ?string $picturePath = null;
    private ?Link $link = null;

    public function __construct(string $title, string $description)
    {
        $this->type = self::TYPE_TEXT;
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

    public function jsonSerialize()
    {
        $data = [
            'type' => $this->type,
            'position' => $this->position,
            'title' => $this->title,
            'description' => $this->description,
            'picturePath' => $this->picturePath,
            'sticky' => $this->sticky,
            'customClassName' => $this->customClassName
        ];

        if ($this->link instanceof Link && null !== $this->link->getUrl()) {
            $data += ['link' => $this->link];
        }

        return $data;
    }
}
