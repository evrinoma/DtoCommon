<?php

namespace Evrinoma\DtoCommon\ValueObject;

interface LegacyIdInterface
{
    public const LEGACY_ID = 'legacy_id';
    /**
     * @return int|null
     */
    public function getLegacyId(): ?int;

    /**
     * @return bool
     */
    public function hasLegacyId(): bool;
}