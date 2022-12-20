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

trait LogoTrait
{
    private ?File $logo = null;

    public function getLogo(): ?File
    {
        return $this->logo;
    }

    public function hasLogo(): bool
    {
        return null !== $this->logo;
    }
}
