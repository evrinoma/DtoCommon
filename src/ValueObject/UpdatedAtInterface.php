<?php


namespace Evrinoma\DtoCommon\ValueObject;


interface UpdatedAtInterface
{
//region SECTION: Fields
    public const UPDATED_AT = 'updated_at';
//endregion Fields
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