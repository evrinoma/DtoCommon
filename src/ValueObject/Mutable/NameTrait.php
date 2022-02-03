<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\NameTrait as NameImmutableTrait;

trait NameTrait
{
    use NameImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $name
     *
     * @return self
     */
    protected function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
//endregion Protected
}