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

use Evrinoma\ArticleBundle\DtoCommon\ValueObject\Immutable\PreviewTrait as PreviewImmutableTrait;
use Evrinoma\DtoBundle\Dto\DtoInterface;
use Symfony\Component\HttpFoundation\File\File;

trait PreviewTrait
{
    use PreviewImmutableTrait;

    protected function setPreview(File $preview): DtoInterface
    {
        $this->preview = $preview;

        return $this;
    }
}
