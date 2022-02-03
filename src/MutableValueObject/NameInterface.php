<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\NameInterface as NameImmutableInterface;

interface NameInterface extends NameImmutableInterface
{
    /**
     * @param string $name
     */
    public function setName(string $name): void;
}