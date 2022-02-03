<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoBundle\Dto\DtoInterface;

interface LegacyIdInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $legacyId
     *
     * @return DtoInterface
     */
    public function setLegacyId(?int $legacyId): DtoInterface;
//endregion Getters/Setters
}