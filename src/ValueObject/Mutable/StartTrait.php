<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\StartTrait as StartImmutableTrait;

trait StartTrait
{
    use StartImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $start
     *
     * @return DtoInterface
     */
    protected function setStart(string $start): DtoInterface
    {
        $this->start = $start;

        return $this;
    }
//endregion Protected
}