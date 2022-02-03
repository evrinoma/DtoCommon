<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface NameInterface
{
//region SECTION: Fields
    public const NAME = 'name';
//endregion Fields
//region SECTION: Public

    /**
     * @return bool
     */
    public function hasName(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getName(): string;
//endregion Getters/Setters
}