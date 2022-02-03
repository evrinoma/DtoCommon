<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

interface CreatedAtInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self;
//endregion Getters/Setters
}