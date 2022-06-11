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

trait DependencyTrait
{
    private string $dependency = '';

    /**
     * @return bool
     */
    public function hasDependency(): bool
    {
        return '' !== $this->dependency;
    }

    /**
     * @return string
     */
    public function getDependency(): string
    {
        return $this->dependency;
    }
}
