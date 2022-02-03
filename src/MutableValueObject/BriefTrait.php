<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\BriefTrait as ImmutableBriefTrait;

trait BriefTrait
{
    use ImmutableBriefTrait;

    /**
     * @param string $brief
     */
    protected function setBrief(string $brief): void
    {
        $this->brief = $brief;
    }

}