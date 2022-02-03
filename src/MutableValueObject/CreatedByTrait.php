<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\CreatedByTrait as ImmutableCreatedByTrait;

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