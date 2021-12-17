<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface CreatedAtInterface
{
//region SECTION: Public
    /**
     * @return bool
     */
    public function hasCreatedAt(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getCreatedAt(): string;
//endregion Getters/Setters
}