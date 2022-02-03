<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\DependencyTrait as ImmutableDependencyTrait;

trait DependencyTrait
{

    use ImmutableDependencyTrait;

//region SECTION: Protected

    /**
     * @param string $dependency
     */
    protected function setDependency(string $dependency): void
    {
        $this->dependency = $dependency;
    }
//endregion Protected
}