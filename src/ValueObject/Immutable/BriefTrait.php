<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

trait BriefTrait
{

//region SECTION: Fields
    private string $brief = '';
//endregion Fields

//region SECTION: Public
    public function hasBrief(): bool
    {
        return $this->brief !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getBrief(): string
    {
        return $this->brief;
    }
//endregion Getters/Setters
}