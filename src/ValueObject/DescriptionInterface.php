<?php


namespace Evrinoma\DtoCommon\ValueObject;


interface DescriptionInterface
{
//region SECTION: Fields
    public const DESCRIPTION = 'description';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasDescription(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getDescription(): string;
//endregion Getters/Setters
}