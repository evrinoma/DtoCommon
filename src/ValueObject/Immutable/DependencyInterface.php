<?php

namespace Evrinoma\DtoCommon\ValueObject\Immutable;


interface DependencyInterface
{
//region SECTION: Fields
    public const DEPENDENCY = 'dependency';
//endregion Fields

//region SECTION: Public
    /**
     * @return bool
     */
    public function hasDependency(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return string
     */
    public function getDependency(): string;
//endregion Getters/Setters
}