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

trait ShortTrait
{
    private string $short = '';

    /**
     * @return bool
     */
    public function hasShort(): bool
    {
        return '' !== $this->short;
    }

    /**
     * @return string
     */
    public function getShort(): string
    {
        return $this->short;
    }
}
