<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

interface CreatedByInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self;
//endregion Getters/Setters
}