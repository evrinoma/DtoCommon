<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;

interface DescriptionInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $description
     *
     * @return DtoInterface
     */
    public function setDescription(string $description): DtoInterface;
//endregion Getters/Setters
}