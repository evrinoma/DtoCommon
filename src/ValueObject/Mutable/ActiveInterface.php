<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;

interface ActiveInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $active
     *
     * @return DtoInterface
     */
    public function setActive(string $active): DtoInterface;
//endregion Getters/Setters
}