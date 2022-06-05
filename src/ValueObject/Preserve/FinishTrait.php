<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait FinishTrait
{
//region SECTION: Getters/Setters
    /**
     * @param string $finish
     *
     * @return DtoInterface
     */
    public function setFinish(string $finish): DtoInterface
    {
        return parent::setFinish($finish);
    }
//endregion Getters/Setters
}