<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface ActiveInterface
{
//region SECTION: Fields
    public const ACTIVE = 'active';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasActive(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getActive(): string;
//endregion Getters/Setters
}