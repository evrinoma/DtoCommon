<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface IdInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $id
     */
    public function setId(?int $id): void;
//endregion Getters/Setters
}