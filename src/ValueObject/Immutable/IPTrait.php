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

trait IPTrait
{
    private string $ip = '';

    public function getIP(): string
    {
        return $this->ip;
    }

    public function hasIP(): bool
    {
        return '' !== $this->ip;
    }
}
