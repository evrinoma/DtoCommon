<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\DescriptionInterface as DescriptionImmutableInterface;

interface DescriptionInterface extends DescriptionImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $description
     */
    public function setDescription(string $description): void;
//endregion Getters/Setters
}