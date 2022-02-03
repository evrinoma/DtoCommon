<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\DescriptionInterface as DescriptionInterfaceImmutable;

interface DescriptionInterface extends DescriptionInterfaceImmutable
{
    /**
     * @param string $description
     */
    public function setDescription(string $description): void;
}