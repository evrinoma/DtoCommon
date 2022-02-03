<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\IdentityTrait as IdentityImmutableTrait;

trait IdentityTrait
{

    use IdentityImmutableTrait;

//region SECTION: Protected
    /**
     * @param string $identity
     */
    protected function setIdentity(string $identity): void
    {
        $this->identity = $identity;
    }
//endregion Protected
}