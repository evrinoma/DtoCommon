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

namespace Evrinoma\DtoCommon\ValueObject\Immutable;

trait PortTrait
{
    private ?int $port = null;

    /**
     * @return bool
     */
    public function hasPort(): bool
    {
        return null !== $this->port;
    }

    /**
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function portToString(): ?string
    {
        return null === $this->port ? $this->port : (string) $this->port;
    }
}
