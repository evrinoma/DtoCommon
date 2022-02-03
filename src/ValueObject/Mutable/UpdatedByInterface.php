<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface UpdatedByInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy(string $updatedBy): void;
//endregion Getters/Setters
}