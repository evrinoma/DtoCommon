<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface IdentityInterface
{
    /**
     * @return bool
     */
    public function hasIdentity(): bool;

    /**
     * @return string
     */
    public function getIdentity(): string;
}