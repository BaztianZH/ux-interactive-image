<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class Parameters implements \JsonSerializable
{
    use JsonSerializerTrait;

    private ?string $soundId;
    private ?string $videoId;

    /**
     * @return ?string
     */
    public function getSoundId(): ?string
    {
        return $this->soundId;
    }

    /**
     * @param ?string $soundId
     * @return Parameters
     */
    public function setSoundId(?string $soundId): Parameters
    {
        $this->soundId = $soundId;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param ?string $videoId
     * @return Parameters
     */
    public function setVideoId(?string $videoId): Parameters
    {
        $this->videoId = $videoId;
        return $this;
    }
}
