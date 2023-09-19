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

trait PortTrait
{
    /**
     * @param int|string|null $port
     *
     * @return DtoInterface
     */
    public function setPort($port): DtoInterface
    {
        return parent::setPort($port);
    }

    /**
     * @param string|null $port
     *
     * @return DtoInterface
     */
    public function portParseString(?string $port): DtoInterface
    {
        return parent::portParseString($port);
    }

    /**
     * @param int|null $port
     *
     * @return DtoInterface
     */
    public function portParseInt(?int $port): DtoInterface
    {
        return parent::portParseInt($port);
    }
}
