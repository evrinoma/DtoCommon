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

interface StartAtInterface
{
    public const START_AT = 'start_at';

    /**
     * @return bool
     */
    public function hasStartAt(): bool;

    /**
     * @return string
     */
    public function getStartAt(): string;
}
