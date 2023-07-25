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

trait LevelTrait
{
    private ?int $level = null;

    public function hasLevel(): bool
    {
        return null !== $this->level;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function levelToString(): ?string
    {
        return null === $this->level ? $this->level : (string) $this->level;
    }
}
