<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\LegacyIdInterface as LegacyIdImmutableInterface;

interface LegacyIdInterface extends LegacyIdImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $legacyId
     */
    public function setLegacyId(?int $legacyId): void;
//endregion Getters/Setters
}