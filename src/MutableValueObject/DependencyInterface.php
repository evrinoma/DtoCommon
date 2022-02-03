<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\DependencyInterface as DependencyInterfaceImmutable;

interface DependencyInterface extends DependencyInterfaceImmutable
{
    /**
     * @param string $dependency
     */
    public function setDependency(string $dependency): void;
}