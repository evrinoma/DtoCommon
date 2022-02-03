<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;


interface FinishInterface
{
//region SECTION: Fields
    public const FINISH = 'date_finish';
//endregion Fields
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