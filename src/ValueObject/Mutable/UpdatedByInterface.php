<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoBundle\Dto\DtoInterface;

interface UpdatedByInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $updatedBy
     *
     * @return DtoInterface
     */
    public function setUpdatedBy(string $updatedBy): DtoInterface;
//endregion Getters/Setters
}