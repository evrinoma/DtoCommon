<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

interface LegacyIdInterface
{
//region SECTION: Fields
    public const LEGACY_ID = 'legacy_id';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasLegacyId(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return int|null
     */
    public function getLegacyId(): ?int;
//endregion Getters/Setters
}