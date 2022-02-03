<?php


namespace Evrinoma\DtoCommon\ValueObject;

trait DescriptionTrait
{
//region SECTION: Fields
    private string $description = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasDescription(): bool
    {
        return $this->description !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
//endregion Getters/Setters
}