<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\DependencyInterface as DependencyImmutableInterface;

interface DependencyInterface extends DependencyImmutableInterface
{
    /**
     * @param string $dependency
     */
    public function setDependency(string $dependency): void;
}