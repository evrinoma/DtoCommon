<?php


namespace Evrinoma\DtoCommon\ValueObject;

trait DescriptionTrait
{
    private string $description = '';

    /**
     * @return bool
     */
    public function hasDescription(): bool
    {
        return $this->description !== '';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}