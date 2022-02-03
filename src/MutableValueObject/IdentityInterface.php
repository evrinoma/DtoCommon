<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\IdentityInterface as IdentityInterfaceImmutable;

interface IdentityInterface extends IdentityInterfaceImmutable
{
    /**
     * @param string $identity
     */
    public function setIdentity(string $identity): void;
}