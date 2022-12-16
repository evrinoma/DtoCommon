<?php

declare(strict_types=1);

/*
 * This file is part of the package.
 *
 * (c) Nikolay Nikolaev <evrinoma@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

interface PositionInterface
{
    public const POSITION = 'position';

    /**
     * @return bool
     */
    public function hasPosition(): bool;

    /**
     * @return int|null
     */
    public function getPosition(): ?int;

    /**
     * @return string|null
     */
    public function positionToString(): ?string;
}
