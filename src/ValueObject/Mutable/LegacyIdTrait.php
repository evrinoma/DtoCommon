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
use Evrinoma\DtoCommon\ValueObject\Immutable\LegacyIdTrait as LegacyIdImmutableTrait;

trait LegacyIdTrait
{
    use LegacyIdImmutableTrait;

    /**
     * @param int|null $legacyId
     *
     * @return DtoInterface
     */
    protected function setLegacyId(?int $legacyId): DtoInterface
    {
        $this->legacyId = $legacyId;

        return $this;
    }
}
