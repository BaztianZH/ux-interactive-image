<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class ProviderItem extends Item
{
    use StickyTrait;

    private ProviderName $provider;
    private Parameters $parameters;

    public function __construct(ProviderName $provider, Parameters $parameters)
    {
        $this->type = self::TYPE_PROVIDER;
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
