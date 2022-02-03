<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait FinishTrait
{
//region SECTION: Fields
    private string $finish = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasFinish(): bool
    {
        return $this->finish !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getFinish(): string
    {
        return $this->finish;
    }
//endregion Getters/Setters
}