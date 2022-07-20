<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class InteractiveImage
{
    private string $imageUrl;
    /** @var array<int, Item> $items  */
    private array $items;
    private Options $options;

    /**
     * @param string $imageUrl
     * @param array<int, Item> $items
     */
    public function __construct(string $imageUrl, array $items = [])
    {
        $this->imageUrl = $imageUrl;
        $this->items = $items;
        $this->options = new Options();
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return array<int, Item>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array<int, Item> $items
     * @return InteractiveImage
     */
    public function setItems(array $items): InteractiveImage
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @param Item $item
     * @return InteractiveImage
     */
    public function addItem(Item $item): self
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * @return Options
     */
    public function getOptions(): Options
    {
        return $this->options;
    }

    public function createView(): array
    {
        return [
            'imageUrl' => $this->imageUrl,
            'items' => $this->items,
            'options' => $this->options,
        ];
    }
}
