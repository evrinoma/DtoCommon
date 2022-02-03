<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\DtoCommon\ValueObject\Immutable\DescriptionTrait as DescriptionImmutableTrait;

trait DescriptionTrait
{
    use DescriptionImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $description
     *
     * @return DtoInterface
     */
    protected function setDescription(string $description): DtoInterface
    {
        $this->description = $description;

        return $this;
    }
//endregion Protected
}