<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

interface BriefInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $brief
     *
     * @return self
     */
    public function setBrief(string $brief): self;
//endregion Getters/Setters
}
