<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\LegacyIdTrait as LegacyIdImmutableTrait;

trait LegacyIdTrait
{
    use LegacyIdImmutableTrait;

//region SECTION: Protected

    /**
     * @param int|null $legacyId
     */
    protected function setLegacyId(?int $legacyId): void
    {
        $this->legacyId = $legacyId;
    }
//endregion Protected
}