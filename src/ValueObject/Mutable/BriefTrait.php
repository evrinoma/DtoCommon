<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\BriefTrait as BriefImmutableTrait;

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