<?php


namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\UpdatedAtTrait as UpdatedAtImmutableTrait;

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