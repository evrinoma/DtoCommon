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

trait TypeTrait
{
    private string $type = '';

    /**
     * @return bool
     */
    public function hasType(): bool
    {
        return '' !== $this->type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
