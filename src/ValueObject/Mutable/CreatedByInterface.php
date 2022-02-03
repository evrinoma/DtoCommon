<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;

interface CreatedByInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $createdBy
     *
     * @return DtoInterface
     */
    public function setCreatedBy(string $createdBy): DtoInterface;
//endregion Getters/Setters
}