<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\ActiveTrait as ActiveImmutableTrait;

trait ActiveTrait
{
    use ActiveImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $active
     *
     * @return DtoInterface
     */
    protected function setActive(string $active): DtoInterface
    {
        $this->active = $active;

        return $this;
    }
//endregion Protected
}