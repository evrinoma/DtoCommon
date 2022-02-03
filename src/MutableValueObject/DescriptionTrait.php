<?php


namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\DescriptionTrait as DescriptionImmutableTrait;

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