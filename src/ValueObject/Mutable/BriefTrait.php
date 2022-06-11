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
use Evrinoma\DtoCommon\ValueObject\Immutable\BriefTrait as BriefImmutableTrait;

trait BriefTrait
{
    use BriefImmutableTrait;

    /**
     * @param string $brief
     *
     * @return DtoInterface
     */
    protected function setBrief(string $brief): DtoInterface
    {
        $this->brief = trim($brief);

        return $this;
    }
}
