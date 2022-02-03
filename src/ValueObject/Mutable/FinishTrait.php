<?php

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
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
     * @return DtoInterface
     */
    public function setFinish(string $finish): DtoInterface
    {
        $this->finish = $finish;

        return $this;
    }
//endregion Getters/Setters
}