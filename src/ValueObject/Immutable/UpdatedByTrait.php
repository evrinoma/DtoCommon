<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

trait UpdatedByTrait
{
//region SECTION: Fields
    private string $updatedBy = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasUpdatedBy(): bool
    {
        return $this->updatedBy !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getUpdatedBy(): string
    {
        return $this->updatedBy;
    }
//endregion Getters/Setters
}