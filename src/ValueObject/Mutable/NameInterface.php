<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface NameInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self;
//endregion Getters/Setters
}