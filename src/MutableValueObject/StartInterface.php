<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\StartInterface as StartImmutableInterface;

interface StartInterface extends StartImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $start
     */
    public function setStart(string $start): void;
//endregion Getters/Setters
}