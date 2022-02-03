<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoCommon\ValueObject\Immutable\UpdatedAtInterface as UpdatedAtImmutableInterface;

interface UpdatedAtInterface extends UpdatedAtImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt): void;
//endregion Getters/Setters
}