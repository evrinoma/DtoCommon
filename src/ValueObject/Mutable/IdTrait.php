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
use Evrinoma\DtoCommon\ValueObject\Immutable\IdTrait as ImmutableIdTrait;

trait IdTrait
{
    use ImmutableIdTrait;

    /**
     * @param int|string|null $id
     *
     * @return DtoInterface
     */
    protected function setId($id): DtoInterface
    {
        if (\is_string($id)) {
            $this->idParseString($id);
        } else {
            $this->idParseInt($id);
        }

        return $this;
    }

    /**
     * @param string|null $id
     *
     * @return DtoInterface
     */
    protected function idParseString(?string $id): DtoInterface
    {
        $this->id = (int) $id;

        return $this;
    }

    /**
     * @param int|null $id
     *
     * @return DtoInterface
     */
    protected function idParseInt(?int $id): DtoInterface
    {
        $this->id = $id;

        return $this;
    }
}
