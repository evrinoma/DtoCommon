<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\ActiveTrait as ImmutableActiveTrait;

trait ActiveTrait
{
    use ImmutableActiveTrait;

    /**
     * @param string $active
     */
    protected function setActive(string $active): void
    {
        $this->active = $active;
    }
}