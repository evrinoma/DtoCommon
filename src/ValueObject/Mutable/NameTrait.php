<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\NameTrait as NameImmutableTrait;

trait NameTrait
{
    use NameImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $name
     *
     * @return DtoInterface
     */
    protected function setName(string $name): DtoInterface
    {
        $this->name = $name;

        return $this;
    }
//endregion Protected
}