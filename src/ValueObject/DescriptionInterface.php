<?php


namespace Evrinoma\DtoCommon\ValueObject;


interface DescriptionInterface
{
    /**
     * @return bool
     */
    public function hasDescription(): bool;

    /**
     * @return string
     */
    public function getDescription(): string;
}