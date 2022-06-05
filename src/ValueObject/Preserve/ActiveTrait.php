<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait ActiveTrait
{
//region SECTION: Protected
    /**
     * @param string $active
     *
     * @return DtoInterface
     */
    public function setActive(string $active): DtoInterface
    {
        return parent::setActive($active);
    }
//endregion Protected
}