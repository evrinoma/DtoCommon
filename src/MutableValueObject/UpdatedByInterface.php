<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\UpdatedByInterface as UpdatedByImmutableInterface;

interface UpdatedByInterface extends UpdatedByImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy(string $updatedBy): void;
//endregion Getters/Setters
}