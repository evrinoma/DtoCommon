<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\CreatedAtTrait as CreatedAtImmutableTrait;

trait CreatedAtTrait
{
    use CreatedAtImmutableTrait;

//region SECTION: Protected
    /**
     * @param string $createdAt
     */
    protected function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
//endregion Protected
}