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

trait StartAtTrait
{
    /**
     * @param string $startAt
     *
     * @return DtoInterface
     */
    public function setStartAt(string $startAt): DtoInterface
    {
        return parent::setStartAt($startAt);
    }
}
