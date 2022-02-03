<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoCommon\ValueObject\Immutable\NumberInterface as NumberImmutableInterface;

interface NumberInterface extends NumberImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $number
     */
    public function setNumber(string $number): void;
//endregion Getters/Setters
}