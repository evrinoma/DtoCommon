<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\LegacyIdTrait as LegacyIdImmutableTrait;

trait LegacyIdTrait
{
    use LegacyIdImmutableTrait;

//region SECTION: Protected

    /**
     * @param int|null $legacyId
     *
     * @return DtoInterface
     */
    protected function setLegacyId(?int $legacyId): DtoInterface
    {
        $this->legacyId = $legacyId;

        return $this;
    }
//endregion Protected
}