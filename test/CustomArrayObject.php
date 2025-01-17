<?php

declare(strict_types=1);

namespace LaminasTest\Stdlib;

use Laminas\Stdlib\ArrayObject;

final class CustomArrayObject extends ArrayObject
{
    /** @var bool */
    protected $isImmutable = true;

    public function isImmutable(): bool
    {
        return $this->isImmutable;
    }
}
