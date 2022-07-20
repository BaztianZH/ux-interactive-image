<?php

namespace BaztianZh\UX\InteractiveImage\Model;

class Position implements \JsonSerializable
{
    private int $left;
    private int $top;

    public function __construct(int $left = 0, int $top = 0)
    {
        $this->left = $left;
        $this->top = $top;
    }

    /**
     * @return int
     */
    public function getLeft(): int
    {
        return $this->left;
    }

    /**
     * @return int
     */
    public function getTop(): int
    {
        return $this->top;
    }

    public function jsonSerialize()
    {
        return [
            'left' => $this->left,
            'top' => $this->top
        ];
    }
}
