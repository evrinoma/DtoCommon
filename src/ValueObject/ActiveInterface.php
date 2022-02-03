<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface ActiveInterface
{
    public const ACTIVE = 'active';
    /**
     * @return bool
     */
    public function hasActive(): bool;

    /**
     * @return string
     */
    public function getActive(): string;
}