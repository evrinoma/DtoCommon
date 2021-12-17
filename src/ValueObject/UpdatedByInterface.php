<?php


namespace Evrinoma\DtoCommon\ValueObject;


interface UpdatedByInterface
{
//region SECTION: Public
    /**
     * @return bool
     */
    public function hasUpdatedBy(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getUpdatedBy(): string;
//endregion Getters/Setters
}