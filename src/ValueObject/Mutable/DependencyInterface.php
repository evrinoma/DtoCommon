<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;

interface DependencyInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $dependency
     *
     * @return DtoInterface
     */
    public function setDependency(string $dependency): DtoInterface;
//endregion Getters/Setters
}