<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\UpdatedAtTrait as UpdatedAtImmutableTrait;

trait UpdatedAtTrait
{
    use UpdatedAtImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $updatedAt
     *
     * @return self
     */
    protected function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
//endregion Protected
}