<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\BriefTrait as BriefImmutableTrait;

trait BriefTrait
{
    use BriefImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $brief
     *
     * @return DtoInterface
     */
    protected function setBrief(string $brief): DtoInterface
    {
        $this->brief = $brief;

        return $this;
    }
//endregion Protected

}