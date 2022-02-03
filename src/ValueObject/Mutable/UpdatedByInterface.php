<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface UpdatedByInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(string $updatedBy): self;
//endregion Getters/Setters
}