<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\IdentityTrait as IdentityImmutableTrait;

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