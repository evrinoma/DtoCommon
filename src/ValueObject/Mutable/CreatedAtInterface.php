<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\CreatedAtInterface as CreatedAtImmutableInterface;

interface CreatedAtInterface extends CreatedAtImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void;
//endregion Getters/Setters
}