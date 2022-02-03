<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\NumberTrait as NumberImmutableTrait;

trait NumberTrait
{
    use NumberImmutableTrait;

//region SECTION: Getters/Setters

    /**
     * @param string $number
     *
     * @return DtoInterface
     */
    public function setNumber(string $number): DtoInterface
    {
        $this->number = $number;

        return $this;
    }
//endregion Getters/Setters

}