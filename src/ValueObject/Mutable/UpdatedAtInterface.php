<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoBundle\Dto\DtoInterface;

interface UpdatedAtInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $updatedAt
     *
     * @return DtoInterface
     */
    public function setUpdatedAt(string $updatedAt): DtoInterface;
//endregion Getters/Setters
}