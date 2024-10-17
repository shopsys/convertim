<?php

declare(strict_types=1);

namespace Shopsys\ConvertimBundle\Model\Convertim;

class ConvertimConfig
{
    /**
     * @param bool $isEnabled
     * @param string $authorizationHeader
     */
    public function __construct(
        public readonly bool $isEnabled,
        public readonly string $authorizationHeader,
    ) {
    }
}
