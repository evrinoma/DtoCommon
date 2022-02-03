<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\IdInterface as IdInterfaceImmutable;

interface IdInterface extends IdInterfaceImmutable
{
    /**
     * @param int|null $id
     */
    public function setId(?int $id): void;
}