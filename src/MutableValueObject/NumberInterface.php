<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\NumberInterface as NumberImmutableInterface;

interface NumberInterface extends NumberImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $number
     */
    public function setNumber(string $number): void;
//endregion Getters/Setters
}