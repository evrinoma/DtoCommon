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

interface IdInterface
{
    public const ID = 'id';

    /**
     * @return bool
     */
    public function hasId(): bool;

    /**
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * @return DtoInterface
     */
    public function Id(): DtoInterface;

    /**
     * @return int|null
     */
    public function toInt(): ?int;
}
