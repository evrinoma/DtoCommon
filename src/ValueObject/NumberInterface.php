<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface NumberInterface
{
    public const NUMBER = 'number';
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