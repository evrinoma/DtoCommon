<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait NameTrait
{
//region SECTION: Protected
    /**
     * @param string $name
     *
     * @return DtoInterface
     */
    public function setName(string $name): DtoInterface
    {
        return parent::setName($name);
    }
//endregion Protected
}