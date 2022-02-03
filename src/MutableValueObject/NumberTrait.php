<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\NumberTrait as NumberImmutableTrait;

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