<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait CreatedAtTrait
{
//region SECTION: Protected
    /**
     * @param string $createdAt
     *
     * @return DtoInterface
     */
    public function setCreatedAt(string $createdAt): DtoInterface
    {
        return parent::setCreatedAt($createdAt);
    }
//endregion Protected
}