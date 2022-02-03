<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\IdentityTrait as IdentityImmutableTrait;

trait IdentityTrait
{
    use IdentityImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $identity
     *
     * @return self
     */
    protected function setIdentity(string $identity): self
    {
        $this->identity = $identity;

        return $this;
    }
//endregion Protected
}