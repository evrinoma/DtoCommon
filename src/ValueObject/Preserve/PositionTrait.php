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

namespace Evrinoma\DtoCommon\ValueObject\Preserve;

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait PositionTrait
{
    /**
     * @param int|string|null $position
     *
     * @return DtoInterface
     */
    public function setPosition($position): DtoInterface
    {
        return parent::setPosition($position);
    }

    /**
     * @param string|null $position
     *
     * @return DtoInterface
     */
    public function positionParseString(?string $position): DtoInterface
    {
        return parent::positionParseString($position);
    }

    /**
     * @param int|null $position
     *
     * @return DtoInterface
     */
    public function positionParseInt(?int $position): DtoInterface
    {
        return parent::positionParseInt($position);
    }
}
