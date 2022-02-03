<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface NumberInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self;
//endregion Getters/Setters
}