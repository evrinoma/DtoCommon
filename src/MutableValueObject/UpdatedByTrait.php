<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\UpdatedByTrait as UpdatedByImmutableTrait;

trait UpdatedByTrait
{

    use UpdatedByImmutableTrait;

    /**
     * @param string $updatedBy
     */
    protected function setUpdatedBy(string $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
    }
}