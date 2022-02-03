<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\NameTrait as NameImmutableTrait;

trait NameTrait
{
    use NameImmutableTrait;

    /**
     * @param string $name
     */
    protected function setName(string $name): void
    {
        $this->name = $name;
    }
}