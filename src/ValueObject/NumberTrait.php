<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait NumberTrait
{
    /**
     * @var string
     */
    private string $number = '';

    /**
     * @return bool
     */
    public function hasNumber(): bool
    {
        return $this->number !== '';
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
}