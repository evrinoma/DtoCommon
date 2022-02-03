<?php


namespace Evrinoma\DtoCommon\ValueObject;


interface UpdatedAtInterface
{
    public const UPDATED_AT = 'updated_at';
//region SECTION: Public
    /**
     * @return bool
     */
    public function hasUpdatedAt(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getUpdatedAt(): string;
//endregion Getters/Setters
}