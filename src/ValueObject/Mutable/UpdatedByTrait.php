<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\UpdatedByTrait as UpdatedByImmutableTrait;

trait UpdatedByTrait
{
    use UpdatedByImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $updatedBy
     *
     * @return DtoInterface
     */
    protected function setUpdatedBy(string $updatedBy): DtoInterface
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }
//endregion Protected
}