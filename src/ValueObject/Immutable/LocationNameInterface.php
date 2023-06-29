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

interface LocationNameInterface
{
    public const LOCATION_NAME = 'location_name';

    /**
     * @return bool
     */
    public function hasLocationName(): bool;

    /**
     * @return string
     */
    public function getLocationName(): string;
}
