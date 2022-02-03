<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait StartTrait
{
//region SECTION: Fields
    private string $start = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasStart(): bool
    {
        return $this->start !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getStart(): string
    {
        return $this->start;
    }
//endregion Getters/Setters
}