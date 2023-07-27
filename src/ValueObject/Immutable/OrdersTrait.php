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

trait OrdersTrait
{
    /**
     * @var string[]
     */
    private array $orders = [];

    /**
     * @return bool
     */
    public function hasOrders(): bool
    {
        return 0 !== \count($this->orders);
    }

    /**
     * @return array
     */
    public function getOrders(): array
    {
        return $this->orders;
    }
}
