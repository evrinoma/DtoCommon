<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoCommon\ValueObject\Immutable\DescriptionInterface as DescriptionImmutableInterface;

interface DescriptionInterface extends DescriptionImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $description
     */
    public function setDescription(string $description): void;
//endregion Getters/Setters
}