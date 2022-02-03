<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoCommon\ValueObject\Immutable\NameInterface as NameImmutableInterface;

interface NameInterface extends NameImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $name
     */
    public function setName(string $name): void;
//endregion Getters/Setters
}