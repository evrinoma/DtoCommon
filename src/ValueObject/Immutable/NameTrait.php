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

trait NameTrait
{
    private string $name = '';

    /**
     * @return bool
     */
    public function hasName(): bool
    {
        return '' !== $this->name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
