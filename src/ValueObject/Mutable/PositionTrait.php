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
use Evrinoma\DtoCommon\ValueObject\Immutable\PositionTrait as ImmutablePositionTrait;

trait PositionTrait
{
    use ImmutablePositionTrait;

    /**
     * @param int|string|null $position
     *
     * @return DtoInterface
     */
    protected function setPosition($position): DtoInterface
    {
        if (\is_string($position)) {
            $this->positionParseString($position);
        } else {
            $this->positionParseInt($position);
        }

        return $this;
    }

    /**
     * @param string|null $position
     *
     * @return DtoInterface
     */
    protected function positionParseString(?string $position): DtoInterface
    {
        $this->position = (int) $position;

        return $this;
    }

    /**
     * @param int|null $position
     *
     * @return DtoInterface
     */
    protected function positionParseInt(?int $position): DtoInterface
    {
        $this->position = $position;

        return $this;
    }
}
