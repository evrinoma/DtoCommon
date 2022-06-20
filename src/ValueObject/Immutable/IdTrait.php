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

use Evrinoma\DtoBundle\Dto\DtoInterface;

trait IdTrait
{
    private ?string $id = null;

    /**
     * @return bool
     */
    public function hasId(): bool
    {
        return null !== $this->id;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return DtoInterface
     */
    public function Id(): DtoInterface
    {
        return $this;
    }

    /**
     * @return int
     */
    public function toInt(): ?int
    {
        return null === $this->id ? $this->id : (int) $this->id;
    }
}
