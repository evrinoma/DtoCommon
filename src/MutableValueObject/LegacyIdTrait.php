<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\LegacyIdTrait as LegacyIdImmutableTrait;

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