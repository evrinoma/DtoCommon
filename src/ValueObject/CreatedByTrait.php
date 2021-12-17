<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait CreatedByTrait
{
//region SECTION: Fields
    private string $createdBy = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasCreatedBy(): bool
    {
        return $this->createdBy !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
//endregion Getters/Setters
}