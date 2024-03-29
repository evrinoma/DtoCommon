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
use Evrinoma\DtoCommon\ValueObject\Immutable\ImageTrait as ImageImmutableTrait;
use Symfony\Component\HttpFoundation\File\File;

trait ImageTrait
{
    use ImageImmutableTrait;

    protected function setImage(File $image): DtoInterface
    {
        $this->image = $image;

        return $this;
    }
}
