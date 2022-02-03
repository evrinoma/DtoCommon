<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\UpdatedByTrait as UpdatedByImmutableTrait;

trait UpdatedByTrait
{

    use UpdatedByImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $updatedBy
     */
    protected function setUpdatedBy(string $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
    }
//endregion Protected
}