<?php


namespace Evrinoma\DtoCommon\ValueObject\Immutable;

trait UpdatedAtTrait
{
//region SECTION: Fields
    private string $updatedAt = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasUpdatedAt(): bool
    {
        return $this->updatedAt !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
//endregion Getters/Setters
}