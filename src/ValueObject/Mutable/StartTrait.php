<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\StartTrait as StartImmutableTrait;

trait StartTrait
{
    use StartImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $start
     *
     * @return self
     */
    protected function setStart(string $start): self
    {
        $this->start = $start;

        return $this;
    }
//endregion Protected
}