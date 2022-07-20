<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class SocialMedia implements \JsonSerializable
{
    private string $url;
    private string $text;
    /** @var array<int, string>  */
    private array $hashtags;
    private string $twitterUsername;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return SocialMedia
     */
    public function setUrl(string $url): SocialMedia
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return SocialMedia
     */
    public function setText(string $text): SocialMedia
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return array<int, string>
     */
    public function getHashtags(): array
    {
        return $this->hashtags;
    }

    /**
     * @param array<int, string> $hashtags
     * @return SocialMedia
     */
    public function setHashtags(array $hashtags): SocialMedia
    {
        $this->hashtags = $hashtags;
        return $this;
    }

    /**
     * @return string
     */
    public function getTwitterUsername(): string
    {
        return $this->twitterUsername;
    }

    /**
     * @param string $twitterUsername
     * @return SocialMedia
     */
    public function setTwitterUsername(string $twitterUsername): SocialMedia
    {
        $this->twitterUsername = $twitterUsername;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'url' => $this->url,
            'text' => $this->text,
            'hashtags' => $this->hashtags,
            'twitterUsername' => $this->twitterUsername
        ];
    }
}
