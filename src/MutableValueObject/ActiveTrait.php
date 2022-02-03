<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\ActiveTrait as ActiveImmutableTrait;

trait ActiveTrait
{
    use ActiveImmutableTrait;

//region SECTION: Protected
    /**
     * @param string $active
     */
    protected function setActive(string $active): void
    {
        $this->active = $active;
    }
//endregion Protected
}