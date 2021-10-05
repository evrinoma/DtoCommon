<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait IdTrait
{
//region SECTION: Fields
    private string $id = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return int
     */
    public function hasId(): bool
    {
        return $this->id !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
//endregion Getters/Setters
}