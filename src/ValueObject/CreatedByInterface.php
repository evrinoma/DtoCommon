<?php

namespace Evrinoma\DtoCommon\ValueObject;

interface CreatedByInterface
{
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