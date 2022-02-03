<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\LegacyIdInterface as LegacyIdImmutableInterface;

interface LegacyIdInterface extends LegacyIdImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $legacyId
     */
    public function setLegacyId(?int $legacyId): void;
//endregion Getters/Setters
}