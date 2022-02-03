<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface IdInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self;
//endregion Getters/Setters
}