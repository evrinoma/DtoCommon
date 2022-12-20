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
use Evrinoma\DtoCommon\ValueObject\Immutable\LogoTrait as LogoImmutableTrait;
use Symfony\Component\HttpFoundation\File\File;

trait LogoTrait
{
    use LogoImmutableTrait;

    protected function setLogo(File $logo): DtoInterface
    {
        $this->logo = $logo;

        return $this;
    }
}
