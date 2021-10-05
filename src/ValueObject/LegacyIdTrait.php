<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait LegacyIdTrait
{
    private ?string $legacyId  = null;

    /**
     * @return string|null
     */
    public function getLegacyId(): ?string
    {
        return $this->legacyId;
    }

    /**
     * @return bool
     */
    public function hasLegacyId(): bool
    {
        return $this->legacyId !== null;
    }
}