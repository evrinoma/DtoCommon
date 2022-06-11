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

trait NumberTrait
{
    /**
     * @var string
     */
    private string $number = '';

    /**
     * @return bool
     */
    public function hasNumber(): bool
    {
        return '' !== $this->number;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
}
