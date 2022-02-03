<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface IdentityInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $identity
     *
     * @return self
     */
    public function setIdentity(string $identity): self;
//endregion Getters/Setters
}