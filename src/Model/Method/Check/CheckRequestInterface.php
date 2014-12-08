<?php

namespace Fruitware\QiwiServiceProvider\Model\Method\Check;

use Fruitware\QiwiServiceProvider\Model\Request\RequestInterface;

/**
 * Subscribers’ Account Status Check and Payment Registration Request Interface
 */
interface CheckRequestInterface extends RequestInterface
{
    /**
     * Internal logic processing
     *
     * @return CheckResponseInterface
     */
    public function process();
}
