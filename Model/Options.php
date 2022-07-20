<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class Options implements \JsonSerializable
{
    private bool $allowHtml = false;
    private bool $debug = false;
    private bool $shareBox = true;
    private ?SocialMedia $socialMedia = null;
    private TriggerEventName $triggerEvent = TriggerEventName::HOVER;

    /**
     * @return bool
     */
    public function isAllowHtml(): bool
    {
        return $this->allowHtml;
    }

    /**
     * @param bool $allowHtml
     * @return Options
     */
    public function setAllowHtml(bool $allowHtml): Options
    {
        $this->allowHtml = $allowHtml;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDebug(): bool
    {
        return $this->debug;
    }

    /**
     * @param bool $debug
     * @return Options
     */
    public function setDebug(bool $debug): Options
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShareBox(): bool
    {
        return $this->shareBox;
    }

    /**
     * @param bool $shareBox
     * @return Options
     */
    public function setShareBox(bool $shareBox): Options
    {
        $this->shareBox = $shareBox;
        return $this;
    }

    /**
     * @return ?SocialMedia
     */
    public function getSocialMedia(): ?SocialMedia
    {
        return $this->socialMedia;
    }

    /**
     * @param ?SocialMedia $socialMedia
     * @return Options
     */
    public function setSocialMedia(?SocialMedia $socialMedia): Options
    {
        $this->socialMedia = $socialMedia;
        return $this;
    }

    /**
     * @return TriggerEventName
     */
    public function getTriggerEvent(): TriggerEventName
    {
        return $this->triggerEvent;
    }

    /**
     * @param TriggerEventName $triggerEvent
     * @return Options
     */
    public function setTriggerEvent(TriggerEventName $triggerEvent): Options
    {
        $this->triggerEvent = $triggerEvent;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'allowHtml' => $this->allowHtml,
            'debug' => $this->debug,
            'shareBox' => $this->shareBox,
            'triggerEvent' => $this->triggerEvent
        ];
    }
}
