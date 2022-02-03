<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

trait LegacyIdTrait
{
//region SECTION: Fields
    private ?int $legacyId = null;
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasLegacyId(): bool
    {
        return $this->legacyId !== null;
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return int|null
     */
    public function getLegacyId(): ?int
    {
        return $this->legacyId;
    }
//endregion Getters/Setters
}