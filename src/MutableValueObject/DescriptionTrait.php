<?php


namespace Evrinoma\DtoCommon\MutableValueObject;

use Evrinoma\DtoCommon\ValueObject\DescriptionTrait as DescriptionTraitImmutable;

trait DescriptionTrait
{
    use DescriptionTraitImmutable;

    /**
     * @param string $description
     */
    protected function setDescription(string $description): void
    {
        $this->description = $description;
    }
}