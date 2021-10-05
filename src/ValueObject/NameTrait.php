<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait NameTrait
{
    private string $name = '';

    /**
     * @return bool
     */
    public function hasName(): bool
    {
        return $this->name !== '';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}