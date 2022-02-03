<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\BriefInterface as BriefImmutableInterface;

interface BriefInterface extends BriefImmutableInterface
{
    /**
     * @param string $brief
     */
    public function setBrief(string $brief): void;
}
