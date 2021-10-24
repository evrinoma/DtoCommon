<?php

namespace Evrinoma\DtoCommon\ValueObject;

trait FinishTrait
{
    private string $finish = '';

    /**
     * @return bool
     */
    public function hasFinish(): bool
    {
        return $this->finish !== '';
    }

    /**
     * @return string
     */
    public function getFinish(): string
    {
        return $this->finish;
    }
}