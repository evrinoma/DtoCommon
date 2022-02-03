<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoCommon\ValueObject\Immutable\IdentityInterface as IdentityImmutableInterface;

interface IdentityInterface extends IdentityImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $identity
     */
    public function setIdentity(string $identity): void;
//endregion Getters/Setters
}