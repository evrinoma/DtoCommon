<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\IdInterface as ImmutableIdInterface;

interface IdInterface extends ImmutableIdInterface
{
    /**
     * @param int|null $id
     */
    public function setId(?int $id): void;
}