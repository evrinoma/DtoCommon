<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait ActiveTrait
{
//region SECTION: Fields
    private string $active = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasActive(): bool
    {
        return $this->active !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getActive(): string
    {
        return $this->active;
    }
//endregion Getters/Setters
}