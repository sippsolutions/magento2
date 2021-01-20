<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\Framework\Jwt\Jws;

use Magento\Framework\Jwt\HeaderInterface;

class JwsHeader implements HeaderInterface
{
    /**
     * @var JwsHeaderParameterInterface[]
     */
    private $parameters;

    /**
     * @param JwsHeaderParameterInterface[] $parameters
     */
    public function __construct(array $parameters)
    {
        foreach ($parameters as $parameter) {
            if (!$parameter instanceof JwsHeaderParameterInterface) {
                throw new \InvalidArgumentException(
                    sprintf('Header "%s" is not applicable to JWS tokens', $parameter->getName())
                );
            }
        }
        $this->parameters = $parameters;
    }

    /**
     * @inheritDoc
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
}
