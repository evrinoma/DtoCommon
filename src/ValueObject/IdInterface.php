<?php


namespace Evrinoma\DtoCommon\ValueObject;


interface IdInterface
{
    public const ID = 'id';
//region SECTION: Public
    /**
     * @return bool
     */
    public function hasId(): bool;
//endregion Public

//region SECTION: Getters/Setters
    /**
     * @return int
     */
    public function getId(): ?int;
//endregion Getters/Setters
}