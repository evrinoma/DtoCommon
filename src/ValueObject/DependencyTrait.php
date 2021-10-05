<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait DependencyTrait
{
//region SECTION: Fields
    private string $dependency = '';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasDependency(): bool
    {
        return $this->dependency !== '';
    }
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getDependency(): string
    {
        return $this->dependency;
    }
//endregion Getters/Setters
}