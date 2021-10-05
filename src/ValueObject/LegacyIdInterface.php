<?php

namespace Evrinoma\DtoCommon\ValueObject;

interface LegacyIdInterface
{
    /**
     * @return string|null
     */
    public function getLegacyId(): ?string;

    /**
     * @return bool
     */
    public function hasLegacyId(): bool;
}