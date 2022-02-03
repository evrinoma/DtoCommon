<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\IdentityInterface as IdentityImmutableInterface;

interface IdentityInterface extends IdentityImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $identity
     */
    public function setIdentity(string $identity): void;
//endregion Getters/Setters
}