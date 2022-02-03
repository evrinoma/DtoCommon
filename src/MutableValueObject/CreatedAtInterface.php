<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\CreatedAtInterface as CreatedAtImmutableInterface;

interface CreatedAtInterface extends CreatedAtImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void;
//endregion Getters/Setters
}