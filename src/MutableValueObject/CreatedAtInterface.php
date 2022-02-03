<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\CreatedAtInterface as CreatedAtInterfaceImmutableInterface;

interface CreatedAtInterface extends CreatedAtInterfaceImmutableInterface
{
    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void;
}