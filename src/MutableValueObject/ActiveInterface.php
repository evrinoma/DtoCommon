<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\ActiveInterface as ActiveImmutableInterface;

interface ActiveInterface extends ActiveImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $active
     */
    public function setActive(string $active): void;
//endregion Getters/Setters
}