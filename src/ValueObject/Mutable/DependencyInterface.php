<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoCommon\ValueObject\Immutable\DependencyInterface as DependencyImmutableInterface;

interface DependencyInterface extends DependencyImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $dependency
     */
    public function setDependency(string $dependency): void;
//endregion Getters/Setters
}