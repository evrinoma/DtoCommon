<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\FinishTrait as FinishImmutableTrait;

trait FinishTrait
{
    use FinishImmutableTrait;

//region SECTION: Protected
//endregion Protected

//region SECTION: Getters/Setters
    /**
     * @param string $finish
     *
     * @return self
     */
    public function setFinish(string $finish): self
    {
        $this->finish = $finish;

        return $this;
    }
//endregion Getters/Setters
}