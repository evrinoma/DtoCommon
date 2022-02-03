<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface CreatedAtInterface
{
    public const CREATED_AT = 'created_at';
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