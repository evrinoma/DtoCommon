<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

interface ActiveInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $active
     *
     * @return self
     */
    public function setActive(string $active): self;
//endregion Getters/Setters
}