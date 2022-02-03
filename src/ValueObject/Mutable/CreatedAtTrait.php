<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\CreatedAtTrait as CreatedAtImmutableTrait;

trait CreatedAtTrait
{
    use CreatedAtImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $createdAt
     *
     * @return self
     */
    protected function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
//endregion Protected
}