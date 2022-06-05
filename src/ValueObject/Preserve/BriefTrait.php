<?php

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait BriefTrait
{
//region SECTION: Protected
    /**
     * @param string $brief
     *
     * @return DtoInterface
     */
    public function setBrief(string $brief): DtoInterface
    {
        return parent::setBrief($brief);
    }
//endregion Protected

}