<?php


namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\DescriptionInterface as DescriptionImmutableInterface;

interface DescriptionInterface extends DescriptionImmutableInterface
{
    /**
     * @param string $description
     */
    public function setDescription(string $description): void;
}