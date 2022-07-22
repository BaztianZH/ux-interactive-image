<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class Link implements \JsonSerializable
{
    use JsonSerializerTrait;

    private string $url;
    private ?string $label;

    public function __construct(string $url, ?string $label)
    {
        $this->url = $url;
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
}
