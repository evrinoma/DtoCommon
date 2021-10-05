<?php

namespace Evrinoma\DtoCommon\ValueObject;


interface ActiveInterface
{
    /**
     * @return bool
     */
    public function hasActive(): bool;

    /**
     * @return string
     */
    public function getActive(): string;
}