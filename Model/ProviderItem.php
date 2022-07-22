<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class ProviderItem extends Item implements \JsonSerializable
{
    use StickyTrait;
    use JsonSerializerTrait;

    private ProviderName $provider;
    private Parameters $parameters;

    public function __construct(int $left, int $top, ProviderName $provider, Parameters $parameters)
    {
        parent::__construct(Item::TYPE_PROVIDER, $left, $top);
        $this->provider = $provider;
        $this->parameters = $parameters;
    }

    /**
     * @return ProviderName
     */
    public function getProvider(): ProviderName
    {
        return $this->provider;
    }

    /**
     * @return Parameters
     */
    public function getParameters(): Parameters
    {
        return $this->parameters;
    }
}
