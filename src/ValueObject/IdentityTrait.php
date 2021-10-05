<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait IdentityTrait
{
//region SECTION: Fields
    private string $identity = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasIdentity(): bool
    {
        return $this->identity !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getIdentity(): string
    {
        return $this->identity;
    }
//endregion Getters/Setters
}