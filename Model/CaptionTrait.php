<?php

namespace BaztianZh\UX\InteractiveImage\Model;

trait CaptionTrait
{
    protected string $caption;

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     * @return self
     */
    public function setCaption(string $caption): self
    {
        $this->caption = $caption;
        return $this;
    }
}
