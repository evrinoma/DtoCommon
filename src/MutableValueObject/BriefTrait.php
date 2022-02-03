<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\BriefTrait as BriefTraitImmutable;

trait BriefTrait
{
    use BriefTraitImmutable;

    /**
     * @param string $brief
     */
    protected function setBrief(string $brief): void
    {
        $this->brief = $brief;
    }

}