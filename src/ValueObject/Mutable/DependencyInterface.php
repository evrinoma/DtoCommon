<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

interface DependencyInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $dependency
     */
    public function setDependency(string $dependency): void;
//endregion Getters/Setters
}