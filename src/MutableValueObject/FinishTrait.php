<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\IdTrait as FinishTraitImmutable;

trait FinishTrait
{

    use FinishTraitImmutable;

    /**
     * @param int|null $id
     */
    protected function setId(?int $id): void
    {
        $this->id = $id;
    }


}