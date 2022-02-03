<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\NameInterface as NameImmutableInterface;

interface NameInterface extends NameImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $name
     */
    public function setName(string $name): void;
//endregion Getters/Setters
}