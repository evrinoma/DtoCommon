<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait UpdatedByTrait
{
//region SECTION: Protected
    /**
     * @param string $updatedBy
     *
     * @return DtoInterface
     */
    public function setUpdatedBy(string $updatedBy): DtoInterface
    {
        return parent::setUpdatedBy($updatedBy);
    }
//endregion Protected
}