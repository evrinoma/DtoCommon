<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\BriefInterface as BriefImmutableInterface;

interface BriefInterface extends BriefImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $brief
     */
    public function setBrief(string $brief): void;
//endregion Getters/Setters
}
