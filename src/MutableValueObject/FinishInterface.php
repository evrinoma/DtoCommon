<?php

namespace Evrinoma\DtoCommon\MutableValueObject;


use Evrinoma\DtoCommon\ValueObject\FinishInterface as FinishImmutableInterface;

interface FinishInterface extends FinishImmutableInterface
{
//region SECTION: Getters/Setters
    /**
     * @param int|null $id
     */
    public function setId(?int $id): void;
//endregion Getters/Setters
}