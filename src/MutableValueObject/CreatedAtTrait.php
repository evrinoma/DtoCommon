<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\CreatedAtTrait as CreatedAtTraitImmutable;

trait CreatedAtTrait
{
    use CreatedAtTraitImmutable;

    /**
     * @param string $createdAt
     */
    protected function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}