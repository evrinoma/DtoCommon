<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\UpdatedByTrait as UpdatedByImmutableTrait;

trait UpdatedByTrait
{
    use UpdatedByImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $updatedBy
     *
     * @return self
     */
    protected function setUpdatedBy(string $updatedBy): self
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }
//endregion Protected
}