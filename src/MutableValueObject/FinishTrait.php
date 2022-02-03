<?php

namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\IdTrait as FinishImmutableTrait;

trait FinishTrait
{

    use FinishImmutableTrait;

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