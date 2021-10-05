<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface DependencyInterface
{
    /**
     * @return bool
     */
    public function hasDependency(): bool;

    /**
     * @return string
     */
    public function getDependency(): string;
}