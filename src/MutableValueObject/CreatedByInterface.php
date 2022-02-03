<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\CreatedByInterface as CreatedByImmutableInterface;

interface CreatedByInterface extends CreatedByImmutableInterface
{
    /**
     * @param string $createdBy
     */
    public function setCreatedBy(string $createdBy): void;
}