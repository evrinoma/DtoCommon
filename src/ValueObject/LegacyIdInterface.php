<?php

namespace Evrinoma\DtoCommon\ValueObject;

interface LegacyIdInterface
{
    /**
     * @return int|null
     */
    public function getLegacyId(): ?int;

    /**
     * @return bool
     */
    public function hasLegacyId(): bool;
}