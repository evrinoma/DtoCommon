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

use Symfony\Component\HttpFoundation\File\File;

trait ImageTrait
{
    private ?File $image = null;

    public function getImage(): File
    {
        return $this->image;
    }

    public function hasImage(): bool
    {
        return null !== $this->image;
    }
}
