<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoBundle\Dto\DtoInterface;

interface NumberInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $number
     *
     * @return DtoInterface
     */
    public function setNumber(string $number): DtoInterface;
//endregion Getters/Setters
}