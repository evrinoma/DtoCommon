<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoCommon\ValueObject\Immutable\StartInterface as StartImmutableInterface;

interface StartInterface extends StartImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $start
     */
    public function setStart(string $start): void;
//endregion Getters/Setters
}