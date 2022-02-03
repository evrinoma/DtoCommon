<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\NumberTrait as NumberImmutableTrait;

trait NumberTrait
{
    use NumberImmutableTrait;

//region SECTION: Getters/Setters

    /**
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }
//endregion Getters/Setters

}