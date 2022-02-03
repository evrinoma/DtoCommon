<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\FinishTrait as FinishImmutableTrait;

trait FinishTrait
{
    use FinishImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $finish
     */
    public function setFinish(string $finish): void
    {
        $this->finish = $finish;
    }
//endregion Protected
}