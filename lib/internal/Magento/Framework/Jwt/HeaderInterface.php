<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\Framework\Jwt;

/**
 * JWT Header.
 */
interface HeaderInterface
{
    /**
     * Parameters.
     *
     * @return HeaderParameterInterface[]
     */
    public function getParameters(): array;
}
