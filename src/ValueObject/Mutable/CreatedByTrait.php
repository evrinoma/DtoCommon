<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\CreatedByTrait as ImmutableCreatedByTrait;

trait CreatedByTrait
{
    use ImmutableCreatedByTrait;

//region SECTION: Protected

    /**
     * @param string $createdBy
     */
    protected function setCreatedBy(string $createdBy): void
    {
        $this->createdBy = $createdBy;
    }
//endregion Protected
}