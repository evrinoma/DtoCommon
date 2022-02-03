<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoBundle\Dto\DtoInterface;

interface NameInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $name
     *
     * @return DtoInterface
     */
    public function setName(string $name): DtoInterface;
//endregion Getters/Setters
}