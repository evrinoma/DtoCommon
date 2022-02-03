<?php

namespace Evrinoma\DtoCommon\ValueObject;

interface BriefInterface
{
    public const BRIEF = 'brief';
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