<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

trait CreatedAtTrait
{
//region SECTION: Fields
    private string $createdAt = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasCreatedAt(): bool
    {
        return $this->createdAt !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
//endregion Getters/Setters
}