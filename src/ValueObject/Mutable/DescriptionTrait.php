<?php


namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoCommon\ValueObject\Immutable\DescriptionTrait as DescriptionImmutableTrait;

trait DescriptionTrait
{
    use DescriptionImmutableTrait;

//region SECTION: Protected

    /**
     * @param string $description
     *
     * @return self
     */
    protected function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
//endregion Protected
}