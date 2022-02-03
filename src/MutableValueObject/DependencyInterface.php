<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\DependencyInterface as DependencyImmutableInterface;

interface DependencyInterface extends DependencyImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $dependency
     */
    public function setDependency(string $dependency): void;
//endregion Getters/Setters
}