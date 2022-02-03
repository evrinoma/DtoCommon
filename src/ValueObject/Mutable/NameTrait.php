<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\NameTrait as NameImmutableTrait;

trait NameTrait
{
    use NameImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $name
     */
    protected function setName(string $name): void
    {
        $this->name = $name;
    }
//endregion Protected
}