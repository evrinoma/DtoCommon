<?php


namespace Evrinoma\DtoCommon\ValueObject\Immutable;


interface IdInterface
{
//region SECTION: Fields
    public const ID = 'id';
//endregion Fields
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