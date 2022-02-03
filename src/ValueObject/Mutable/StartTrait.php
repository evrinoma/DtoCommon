<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\StartTrait as StartImmutableTrait;

trait StartTrait
{
    use StartImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $start
     */
    protected function setStart(string $start): void
    {
        $this->start = $start;
    }
//endregion Protected
}