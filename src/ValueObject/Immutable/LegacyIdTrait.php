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

trait LegacyIdTrait
{
    private ?int $legacyId = null;

    /**
     * @return bool
     */
    public function hasLegacyId(): bool
    {
        return null !== $this->legacyId;
    }

    /**
     * @return int|null
     */
    public function getLegacyId(): ?int
    {
        return $this->legacyId;
    }
}
