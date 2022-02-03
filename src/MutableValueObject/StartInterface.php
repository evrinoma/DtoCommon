<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\StartInterface as StartImmutableInterface;

interface StartInterface extends StartImmutableInterface
{
    /**
     * @param string $start
     */
    public function setStart(string $start): void;
}