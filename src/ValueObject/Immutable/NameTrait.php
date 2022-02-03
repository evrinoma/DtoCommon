<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

trait NameTrait
{
//region SECTION: Fields
    private string $name = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasName(): bool
    {
        return $this->name !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
//endregion Getters/Setters
}