<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait NumberTrait
{
//region SECTION: Getters/Setters
    /**
     * @param string $number
     *
     * @return DtoInterface
     */
    public function setNumber(string $number): DtoInterface
    {
        return parent::setName($number);
    }
//endregion Getters/Setters

}