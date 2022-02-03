<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\LegacyIdInterface as LegacyIdInterfaceImmutable;

interface LegacyIdInterface extends LegacyIdInterfaceImmutable
{
    /**
     * @param int|null $legacyId
     */
    public function setLegacyId(?int $legacyId): void;
}