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

interface OrderInterface
{
    public const ORDER = 'order';

    /**
     * @return bool
     */
    public function hasOrder(): bool;

    /**
     * @return string
     */
    public function getOrder(): string;
}
