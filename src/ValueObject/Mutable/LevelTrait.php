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
use Evrinoma\DtoCommon\ValueObject\Immutable\LevelTrait as LevelImmutableTrait;

trait LevelTrait
{
    use LevelImmutableTrait;

    protected function setLevel($level): DtoInterface
    {
        if (\is_string($level)) {
            $this->levelParseString($level);
        } else {
            $this->levelParseInt($level);
        }

        return $this;
    }

    /**
     * @param string|null $level
     *
     * @return DtoInterface
     */
    protected function levelParseString(?string $level): DtoInterface
    {
        $this->level = (int) $level;

        return $this;
    }

    /**
     * @param int|null $level
     *
     * @return DtoInterface
     */
    protected function levelParseInt(?int $level): DtoInterface
    {
        $this->level = $level;

        return $this;
    }
}
