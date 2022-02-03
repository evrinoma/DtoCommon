<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\BriefInterface as ImmutableBriefInterface;

interface BriefInterface extends ImmutableBriefInterface
{
    /**
     * @param string $brief
     */
    public function setBrief(string $brief): void;
}
