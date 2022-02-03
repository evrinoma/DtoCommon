<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface DependencyInterface
{
    public const DEPENDENCY = 'dependency';
    /**
     * @return bool
     */
    public function hasDependency(): bool;

    /**
     * @return string
     */
    public function getDependency(): string;
}