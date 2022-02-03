<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\FinishInterface as FinishInterfaceImmutable;

interface FinishInterface extends FinishInterfaceImmutable
{
    /**
     * @param int|null $id
     */
    public function setId(?int $id): void;
}