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

trait AttributesTrait
{
    /**
     * @var string[]
     */
    private array $attributes = [];

    /**
     * @return bool
     */
    public function hasAttributes(): bool
    {
        return 0 !== \count($this->attributes);
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
}
