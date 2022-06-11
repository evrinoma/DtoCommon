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

trait UpdatedByTrait
{
    private string $updatedBy = '';

    /**
     * @return bool
     */
    public function hasUpdatedBy(): bool
    {
        return '' !== $this->updatedBy;
    }

    /**
     * @return string
     */
    public function getUpdatedBy(): string
    {
        return $this->updatedBy;
    }
}
