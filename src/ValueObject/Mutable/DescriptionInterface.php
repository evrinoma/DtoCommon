<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;

interface DescriptionInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self;
//endregion Getters/Setters
}