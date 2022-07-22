<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class ProviderItem extends Item implements \JsonSerializable
{
    use JsonSerializerTrait;

    private ProviderName $providerName;
    private Parameters $parameters;

    public function __construct(int $left, int $top, ProviderName $provider, Parameters $parameters)
    {
        parent::__construct(Item::TYPE_PROVIDER, $left, $top);
        $this->providerName = $provider;
        $this->parameters = $parameters;
    }

    /**
     * @return ProviderName
     */
    public function getProviderName(): ProviderName
    {
        return $this->providerName;
    }

    /**
     * @return Parameters
     */
    public function getParameters(): Parameters
    {
        return $this->parameters;
    }
}
