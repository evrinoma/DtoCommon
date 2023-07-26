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
use Evrinoma\DtoCommon\ValueObject\Immutable\OrderDirectionTrait as OrderDirectionImmutableTrait;

trait OrderDirectionTrait
{
    use OrderDirectionImmutableTrait;

    /**
     * @return DtoInterface
     */
    protected function setOrderDirectionDesc(): DtoInterface
    {
        $this->orderDirection = 'DESC';

        return $this;
    }

    /**
     * @return DtoInterface
     */
    protected function setOrderDirectionAsc(): DtoInterface
    {
        $this->orderDirection = 'ASC';

        return $this;
    }
}
