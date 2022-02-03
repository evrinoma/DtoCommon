<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoBundle\Dto\DtoInterface;

interface StartInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $start
     *
     * @return DtoInterface
     */
    public function setStart(string $start): DtoInterface;
//endregion Getters/Setters
}