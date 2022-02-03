<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\ActiveInterface as ActiveInterfaceImmutable;

interface ActiveInterface extends ActiveInterfaceImmutable
{
    /**
     * @param string $active
     */
    public function setActive(string $active): void;
}