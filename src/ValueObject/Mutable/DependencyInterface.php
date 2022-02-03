<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

interface DependencyInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $dependency
     *
     * @return self
     */
    public function setDependency(string $dependency): self;
//endregion Getters/Setters
}