<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\ActiveInterface as ImmutableActiveInterface;

interface ActiveInterface extends ImmutableActiveInterface
{
    /**
     * @param string $active
     */
    public function setActive(string $active): void;
}