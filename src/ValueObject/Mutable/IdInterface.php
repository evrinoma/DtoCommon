<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoCommon\ValueObject\Immutable\IdInterface as IdImmutableInterface;

interface IdInterface extends IdImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $id
     */
    public function setId(?int $id): void;
//endregion Getters/Setters
}