<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;

interface CreatedAtInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $createdAt
     *
     * @return DtoInterface
     */
    public function setCreatedAt(string $createdAt): DtoInterface;
//endregion Getters/Setters
}