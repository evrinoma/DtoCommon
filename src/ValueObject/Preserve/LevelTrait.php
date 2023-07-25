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

trait LevelTrait
{
    /**
     * @param int $level
     *
     * @return DtoInterface
     */
    public function setLevel($level): DtoInterface
    {
        return parent::setLevel($level);
    }

    /**
     * @param string|null $level
     *
     * @return DtoInterface
     */
    public function levelParseString(?string $level): DtoInterface
    {
        return parent::levelParseString($level);
    }

    /**
     * @param int|null $level
     *
     * @return DtoInterface
     */
    public function levelParseInt(?int $level): DtoInterface
    {
        return parent::levelParseInt($level);
    }
}
