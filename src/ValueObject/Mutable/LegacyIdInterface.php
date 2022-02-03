<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface LegacyIdInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $legacyId
     *
     * @return self
     */
    public function setLegacyId(?int $legacyId): self;
//endregion Getters/Setters
}