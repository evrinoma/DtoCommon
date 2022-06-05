<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait UpdatedAtTrait
{
//region SECTION: Protected
    /**
     * @param string $updatedAt
     *
     * @return DtoInterface
     */
    public function setUpdatedAt(string $updatedAt): DtoInterface
    {
        return parent::setUpdatedAt($updatedAt);
    }
//endregion Protected
}