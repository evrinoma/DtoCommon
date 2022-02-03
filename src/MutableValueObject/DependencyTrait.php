<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\DependencyTrait as ImmutableDependencyTrait;

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