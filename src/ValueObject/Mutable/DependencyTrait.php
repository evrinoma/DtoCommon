<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\DependencyTrait as ImmutableDependencyTrait;

trait DependencyTrait
{
    use ImmutableDependencyTrait;

//region SECTION: Protected

    /**
     * @param string $dependency
     *
     * @return self
     */
    protected function setDependency(string $dependency): self
    {
        $this->dependency = $dependency;

        return $this;
    }
//endregion Protected
}