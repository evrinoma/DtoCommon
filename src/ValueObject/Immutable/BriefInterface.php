<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

interface BriefInterface
{
//region SECTION: Fields
    public const BRIEF = 'brief';
//endregion Fields
//region SECTION: Public

    /**
     * @return bool
     */
    public function hasBrief(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getBrief(): string;
//endregion Getters/Setters

}