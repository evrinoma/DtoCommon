<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;


interface IdentityInterface
{
//region SECTION: Fields
    public const IDENTITY = 'identity';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasIdentity(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getIdentity(): string;
//endregion Getters/Setters
}