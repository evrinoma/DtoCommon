<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


interface IdentityInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $identity
     */
    public function setIdentity(string $identity): void;
//endregion Getters/Setters
}