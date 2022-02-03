<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\IdentityTrait as IdentityImmutableTrait;

trait IdentityTrait
{
    use IdentityImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $identity
     *
     * @return DtoInterface
     */
    protected function setIdentity(string $identity): DtoInterface
    {
        $this->identity = $identity;

        return $this;
    }
//endregion Protected
}