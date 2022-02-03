<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\NameTrait as NameTraitImmutable;

trait NameTrait
{

    use NameTraitImmutable;

    /**
     * @param string $name
     */
    protected function setName(string $name): void
    {
        $this->name = $name;
    }
}