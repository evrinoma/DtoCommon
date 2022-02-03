<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\UpdatedAtTrait as UpdatedAtImmutableTrait;

trait UpdatedAtTrait
{
    use UpdatedAtImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $updatedAt
     *
     * @return DtoInterface
     */
    protected function setUpdatedAt(string $updatedAt): DtoInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
//endregion Protected
}