<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\StartTrait as StartImmutableTrait;

trait StartTrait
{

    use StartImmutableTrait;

    /**
     * @param string $start
     */
    protected function setStart(string $start): void
    {
        $this->start = $start;
    }
}