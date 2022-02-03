<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;


interface NumberInterface
{
//region SECTION: Fields
    public const NUMBER = 'number';
//endregion Fields
//region SECTION: Public

    /**
     * @return bool
     */
    public function hasNumber(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getNumber(): string;
//endregion Getters/Setters
}