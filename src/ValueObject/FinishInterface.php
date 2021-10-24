<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface FinishInterface
{
//region SECTION: Public
    /**
     * @return bool
     */
    public function hasFinish(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getFinish(): string;
//endregion Getters/Setters
}