<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait CreatedByTrait
{
//region SECTION: Protected
    /**
     * @param string $createdBy
     *
     * @return DtoInterface
     */
    public function setCreatedBy(string $createdBy): DtoInterface
    {
        return parent::setCreatedBy($createdBy);
    }
//endregion Protected
}