<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface IdentityInterface
{
    public const IDENTITY = 'identity';
    /**
     * @return bool
     */
    public function hasIdentity(): bool;

    /**
     * @return string
     */
    public function getIdentity(): string;
}