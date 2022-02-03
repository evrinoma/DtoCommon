<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\DependencyTrait as ImmutableDependencyTrait;

trait DependencyTrait
{
    use ImmutableDependencyTrait;

//region SECTION: Protected

    /**
     * @param string $dependency
     *
     * @return DtoInterface
     */
    protected function setDependency(string $dependency): DtoInterface
    {
        $this->dependency = $dependency;

        return $this;
    }
//endregion Protected
}