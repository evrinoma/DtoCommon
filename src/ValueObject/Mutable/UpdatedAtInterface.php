<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface UpdatedAtInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self;
//endregion Getters/Setters
}