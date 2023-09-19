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

interface PortInterface
{
    public const PORT = 'port';

    /**
     * @return bool
     */
    public function hasPort(): bool;

    /**
     * @return int|null
     */
    public function getPort(): ?int;

    /**
     * @return string|null
     */
    public function portToString(): ?string;
}
