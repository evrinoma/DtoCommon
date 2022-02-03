<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\CreatedByInterface as CreatedByImmutableInterface;

interface CreatedByInterface extends CreatedByImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $createdBy
     */
    public function setCreatedBy(string $createdBy): void;
//endregion Getters/Setters
}