<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface LegacyIdInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $legacyId
     */
    public function setLegacyId(?int $legacyId): void;
//endregion Getters/Setters
}