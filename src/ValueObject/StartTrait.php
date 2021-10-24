<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait StartTrait
{
    private string $start = '';

    /**
     * @return bool
     */
    public function hasStart(): bool
    {
        return $this->start !== '';
    }

    /**
     * @return string
     */
    public function getStart(): string
    {
        return $this->start;
    }
}