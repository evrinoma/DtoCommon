<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\IdInterface as IdImmutableInterface;

interface IdInterface extends IdImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $id
     */
    public function setId(?int $id): void;
//endregion Getters/Setters
}