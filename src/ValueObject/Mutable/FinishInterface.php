<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoBundle\Dto\DtoInterface;

interface FinishInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $finish
     *
     * @return DtoInterface
     */
    public function setFinish(string $finish): DtoInterface;
//endregion Getters/Setters
}