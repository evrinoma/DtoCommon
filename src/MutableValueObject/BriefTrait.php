<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\BriefTrait as BriefImmutableTrait;

trait BriefTrait
{
    use BriefImmutableTrait;

//region SECTION: Protected
    /**
     * @param string $brief
     */
    protected function setBrief(string $brief): void
    {
        $this->brief = $brief;
    }
//endregion Protected

}