<?php

namespace BaztianZh\UX\InteractiveImage\Model;

trait StickyTrait
{
    protected bool $sticky = false;

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
}
