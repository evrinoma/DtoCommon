<?php


namespace Evrinoma\DtoCommon\ValueObject;


interface DescriptionInterface
{
    public const DESCRIPTION = 'description';
    /**
     * @return bool
     */
    public function hasDescription(): bool;

    /**
     * @return string
     */
    public function getDescription(): string;
}