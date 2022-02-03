<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\CreatedByTrait as ImmutableCreatedByTrait;

trait CreatedByTrait
{
    use ImmutableCreatedByTrait;

//region SECTION: Protected

    /**
     * @param string $createdBy
     *
     * @return DtoInterface
     */
    protected function setCreatedBy(string $createdBy): DtoInterface
    {
        $this->createdBy = $createdBy;

        return $this;
    }
//endregion Protected
}