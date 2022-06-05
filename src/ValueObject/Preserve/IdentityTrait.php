<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait IdentityTrait
{
//region SECTION: Protected
    /**
     * @param string $identity
     *
     * @return DtoInterface
     */
    protected function setIdentity(string $identity): DtoInterface
    {
        return parent::setIdentity($identity);
    }
//endregion Protected
}