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

interface LegacyIdInterface
{
    public const LEGACY_ID = 'legacy_id';

    /**
     * @return bool
     */
    public function hasLegacyId(): bool;

    /**
     * @return int|null
     */
    public function getLegacyId(): ?int;
}
