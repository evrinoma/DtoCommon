<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait DependencyTrait
{
//region SECTION: Protected
    /**
     * @param string $dependency
     *
     * @return DtoInterface
     */
    public function setDependency(string $dependency): DtoInterface
    {
        return parent::setDependency($dependency);
    }
//endregion Protected
}