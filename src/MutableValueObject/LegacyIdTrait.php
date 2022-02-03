<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\LegacyIdTrait as LegacyIdTraitImmutable;

trait LegacyIdTrait
{

    use LegacyIdTraitImmutable;


    /**
     * @param int|null $legacyId
     */
    protected function setLegacyId(?int $legacyId): void
    {
        $this->legacyId = $legacyId;
    }
}