<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\IdentityTrait as IdentityTraitImmutable;

trait IdentityTrait
{

    use IdentityTraitImmutable;

    /**
     * @param string $identity
     */
    protected function setIdentity(string $identity): void
    {
        $this->identity = $identity;
    }
}