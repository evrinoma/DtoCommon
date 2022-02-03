<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\CreatedAtTrait as CreatedAtImmutableTrait;

trait CreatedAtTrait
{
    use CreatedAtImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $createdAt
     *
     * @return DtoInterface
     */
    protected function setCreatedAt(string $createdAt): DtoInterface
    {
        $this->createdAt = $createdAt;

        return $this;
    }
//endregion Protected
}