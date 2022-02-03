<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\CreatedByInterface as CreatedByInterfaceImmutable;

interface CreatedByInterface extends CreatedByInterfaceImmutable
{
    /**
     * @param string $createdBy
     */
    public function setCreatedBy(string $createdBy): void;
}