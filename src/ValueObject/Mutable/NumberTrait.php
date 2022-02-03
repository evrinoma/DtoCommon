<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\NumberTrait as NumberImmutableTrait;

trait NumberTrait
{

    use NumberImmutableTrait;

//region SECTION: Getters/Setters

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }
//endregion Getters/Setters

}