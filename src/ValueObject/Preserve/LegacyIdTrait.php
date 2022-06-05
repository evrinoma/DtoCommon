<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait LegacyIdTrait
{
//region SECTION: Protected
    /**
     * @param int|null $legacyId
     *
     * @return DtoInterface
     */
    public function setLegacyId(?int $legacyId): DtoInterface
    {
        return parent::setLegacyId($legacyId);
    }
//endregion Protected
}