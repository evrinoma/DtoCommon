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

trait FinishAtTrait
{
    private string $finishAt = '';

    /**
     * @return bool
     */
    public function hasFinishAt(): bool
    {
        return '' !== $this->finishAt;
    }

    /**
     * @return string
     */
    public function getfinishat(): string
    {
        return $this->finishAt;
    }
}
