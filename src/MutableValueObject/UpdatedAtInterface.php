<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\UpdatedAtInterface as UpdatedAtImmutableInterface;

interface UpdatedAtInterface extends UpdatedAtImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt): void;
//endregion Getters/Setters
}