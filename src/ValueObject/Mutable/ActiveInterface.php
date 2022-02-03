<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\ActiveInterface as ActiveImmutableInterface;

interface ActiveInterface extends ActiveImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $active
     */
    public function setActive(string $active): void;
//endregion Getters/Setters
}