<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\IdTrait as ImmutableIdTrait;

trait IdTrait
{
    use ImmutableIdTrait;

//region SECTION: Protected

    /**
     * @param int|null $id
     *
     * @return DtoInterface
     */
    protected function setId(?int $id): DtoInterface
    {
        $this->id = $id;

        return $this;
    }
//endregion Protected
}