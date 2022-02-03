<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

trait NumberTrait
{
//region SECTION: Fields
    /**
     * @var string
     */
    private string $number = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasNumber(): bool
    {
        return $this->number !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
//endregion Getters/Setters
}