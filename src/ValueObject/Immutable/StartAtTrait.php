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

trait StartAtTrait
{
    private string $startAt = '';

    /**
     * @return bool
     */
    public function hasStartAt(): bool
    {
        return '' !== $this->startAt;
    }

    /**
     * @return string
     */
    public function getStartAt(): string
    {
        return $this->startAt;
    }
}
