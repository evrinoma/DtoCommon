<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;

interface BriefInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $brief
     *
     * @return DtoInterface
     */
    public function setBrief(string $brief): DtoInterface;
//endregion Getters/Setters
}
