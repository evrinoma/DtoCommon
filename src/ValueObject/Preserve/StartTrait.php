<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait StartTrait
{
//region SECTION: Protected
    /**
     * @param string $start
     *
     * @return DtoInterface
     */
    public function setStart(string $start): DtoInterface
    {
        return parent::setStart($start);
    }
//endregion Protected
}