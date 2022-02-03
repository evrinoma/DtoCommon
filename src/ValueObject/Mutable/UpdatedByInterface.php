<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoCommon\ValueObject\Immutable\UpdatedByInterface as UpdatedByImmutableInterface;

interface UpdatedByInterface extends UpdatedByImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy(string $updatedBy): void;
//endregion Getters/Setters
}