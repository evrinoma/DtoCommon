<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

interface CreatedByInterface
{
//region SECTION: Fields
    public const CREATED_BY = 'created_by';
//endregion Fields
//region SECTION: Public

    /**
     * @return bool
     */
    public function hasCreatedBy(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getCreatedBy(): string;
//endregion Getters/Setters
}