<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\ActiveTrait as ActiveTraitImmutable;

trait ActiveTrait
{
    use ActiveTraitImmutable;

    /**
     * @param string $active
     */
    protected function setActive(string $active): void
    {
        $this->active = $active;
    }
}