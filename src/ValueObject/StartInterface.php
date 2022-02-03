<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface StartInterface
{
//region SECTION: Fields
    public const START = 'date_start';
//endregion Fields
//region SECTION: Public

    /**
     * @return bool
     */
    public function hasStart(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getStart(): string;
//endregion Getters/Setters
}