<?php

namespace Fruitware\QiwiServiceProvider\Model\Method\Check;

use Fruitware\QiwiServiceProvider\Model\Request\AbstractRequest;

/**
 * Subscribers’ Account Status Check and Payment Registration Request
 */
abstract class CheckRequest extends AbstractRequest implements CheckRequestInterface
{
    /**
     * Get response object
     *
     * @return CheckResponseInterface
     */
    public function getResponse()
    {
        return new CheckResponse();
    }

    /**
     * @param array $params from $_GET parameters
     *
     * @return CheckRequestInterface
     */
    public function handleRequest(array $params)
    {
        return $this
            ->setTxnId($params['txn_id'])
            ->setAccount($params['account'])
            ->setSum($params['sum'])
        ;
    }
}
