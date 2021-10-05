<?php


namespace Evrinoma\DtoCommon\ValueObject;


interface IdInterface
{
//region SECTION: Public
    /**
     * @return bool
     */
    public function hasId(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getId(): string;
//endregion Getters/Setters
}