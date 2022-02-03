<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\CreatedByInterface as CreatedByImmutableInterface;

interface CreatedByInterface extends CreatedByImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $createdBy
     */
    public function setCreatedBy(string $createdBy): void;
//endregion Getters/Setters
}