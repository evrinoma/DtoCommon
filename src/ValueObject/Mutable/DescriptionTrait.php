<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\DescriptionTrait as DescriptionImmutableTrait;

trait DescriptionTrait
{
    use DescriptionImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $description
     */
    protected function setDescription(string $description): void
    {
        $this->description = $description;
    }
//endregion Protected
}