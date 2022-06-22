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
    private ?int $id = null;

    /**
     * @return bool
     */
    public function hasId(): bool
    {
        return null !== $this->id;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function idToString(): ?string
    {
        return null === $this->id ? $this->id : (string) $this->id;
    }
}
