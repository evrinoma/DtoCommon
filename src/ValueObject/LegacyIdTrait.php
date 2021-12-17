<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait LegacyIdTrait
{
    private ?int $legacyId = null;

    /**
     * @return int|null
     */
    public function getLegacyId(): ?int
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