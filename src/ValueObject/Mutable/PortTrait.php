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
use Evrinoma\DtoCommon\ValueObject\Immutable\PortTrait as ImmutablePortTrait;

trait PortTrait
{
    use ImmutablePortTrait;

    /**
     * @param int|string|null $port
     *
     * @return DtoInterface
     */
    protected function setPort($port): DtoInterface
    {
        if (\is_string($port)) {
            $this->portParseString($port);
        } else {
            $this->portParseInt($port);
        }

        return $this;
    }

    /**
     * @param string|null $port
     *
     * @return DtoInterface
     */
    protected function portParseString(?string $port): DtoInterface
    {
        $this->port = (int) $port;

        return $this;
    }

    /**
     * @param int|null $port
     *
     * @return DtoInterface
     */
    protected function portParseInt(?int $port): DtoInterface
    {
        $this->port = $port;

        return $this;
    }
}
