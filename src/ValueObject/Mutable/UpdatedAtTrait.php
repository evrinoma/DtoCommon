<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\UpdatedAtTrait as UpdatedAtImmutableTrait;

trait UpdatedAtTrait
{

    use UpdatedAtImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $updatedAt
     */
    protected function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
//endregion Protected
}