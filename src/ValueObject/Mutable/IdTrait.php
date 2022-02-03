<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\IdTrait as ImmutableIdTrait;

trait IdTrait
{
    use ImmutableIdTrait;

//region SECTION: Protected

    /**
     * @param int|null $id
     */
    protected function setId(?int $id): void
    {
        $this->id = $id;
    }
//endregion Protected
}