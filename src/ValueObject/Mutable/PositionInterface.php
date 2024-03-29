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

namespace Evrinoma\DtoCommon\ValueObject\Mutable;

use Evrinoma\DtoBundle\Dto\DtoInterface;

interface PositionInterface
{
    /**
     * @param int|null $position
     *
     * @return DtoInterface
     */
    public function setPosition($position): DtoInterface;

    /**
     * @param int|null $position
     *
     * @return DtoInterface
     */
    public function positionParseInt(?int $position): DtoInterface;

    /**
     * @param string|null $position
     *
     * @return DtoInterface
     */
    public function positionParseString(?string $position): DtoInterface;
}
