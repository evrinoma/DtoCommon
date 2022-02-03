<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\IdInterface as IdImmutableInterface;

interface IdInterface extends IdImmutableInterface
{
    /**
     * @param int|null $id
     */
    public function setId(?int $id): void;
}