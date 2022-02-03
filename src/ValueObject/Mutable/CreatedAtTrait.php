<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\CreatedAtTrait as CreatedAtImmutableTrait;

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