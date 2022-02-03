<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\NameInterface as NameInterfaceImmutable;

interface NameInterface extends NameInterfaceImmutable
{
    /**
     * @param string $name
     */
    public function setName(string $name): void;
}