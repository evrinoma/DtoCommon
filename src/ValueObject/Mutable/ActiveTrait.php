<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\ActiveTrait as ActiveImmutableTrait;

trait ActiveTrait
{
    use ActiveImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $active
     *
     * @return self
     */
    protected function setActive(string $active): self
    {
        $this->active = $active;

        return $this;
    }
//endregion Protected
}