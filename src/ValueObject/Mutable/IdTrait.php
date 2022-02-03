<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\IdTrait as ImmutableIdTrait;

trait IdTrait
{
    use ImmutableIdTrait;

//region SECTION: Protected

    /**
     * @param int|null $id
     *
     * @return self
     */
    protected function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }
//endregion Protected
}