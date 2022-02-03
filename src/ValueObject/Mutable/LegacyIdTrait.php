<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\LegacyIdTrait as LegacyIdImmutableTrait;

trait LegacyIdTrait
{
    use LegacyIdImmutableTrait;

//region SECTION: Protected

    /**
     * @param int|null $legacyId
     *
     * @return self
     */
    protected function setLegacyId(?int $legacyId): self
    {
        $this->legacyId = $legacyId;

        return $this;
    }
//endregion Protected
}