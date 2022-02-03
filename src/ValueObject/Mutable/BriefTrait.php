<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\BriefTrait as BriefImmutableTrait;

trait BriefTrait
{
    use BriefImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $brief
     *
     * @return self
     */
    protected function setBrief(string $brief): self
    {
        $this->brief = $brief;

        return $this;
    }
//endregion Protected

}