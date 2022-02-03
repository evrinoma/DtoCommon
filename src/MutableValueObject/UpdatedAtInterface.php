<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\UpdatedAtInterface as UpdatedAtImmutableInterface;

interface UpdatedAtInterface extends UpdatedAtImmutableInterface
{
    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt): void;
}