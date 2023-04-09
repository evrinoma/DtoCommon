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
use Evrinoma\DtoCommon\ValueObject\Immutable\FinishAtTrait as FinishAtImmutableTrait;

trait FinishAtTrait
{
    use FinishAtImmutableTrait;

    /**
     * @param string $finishAt
     *
     * @return DtoInterface
     */
    protected function setFinishAt(string $finishAt): DtoInterface
    {
        $this->finishAt = trim($finishAt);

        return $this;
    }
}
