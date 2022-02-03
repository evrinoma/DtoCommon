<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;


use Evrinoma\DtoBundle\Dto\DtoInterface;

interface IdentityInterface
{
//region SECTION: Getters/Setters
    /**
     * @param string $identity
     *
     * @return DtoInterface
     */
    public function setIdentity(string $identity): DtoInterface;
//endregion Getters/Setters
}