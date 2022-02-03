<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait IdTrait
{
//region SECTION: Fields
    private ?int $id = null;
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasId(): bool
    {
        return $this->id !== null;
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
//endregion Getters/Setters
}