<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\ActiveTrait as ActiveImmutableTrait;

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