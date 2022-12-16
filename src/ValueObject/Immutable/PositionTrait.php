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

trait PositionTrait
{
    private ?int $position = null;

    /**
     * @return bool
     */
    public function hasPosition(): bool
    {
        return null !== $this->position;
    }

    /**
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function positionToString(): ?string
    {
        return null === $this->position ? $this->position : (string) $this->position;
    }
}
