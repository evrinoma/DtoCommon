<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\LegacyIdInterface as LegacyIdImmutableInterface;

interface LegacyIdInterface extends LegacyIdImmutableInterface
{
    /**
     * @param int|null $legacyId
     */
    public function setLegacyId(?int $legacyId): void;
}