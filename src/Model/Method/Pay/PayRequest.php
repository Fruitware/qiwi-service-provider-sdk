<?php

namespace Fruitware\QiwiServiceProvider\Model\Method\Pay;

use Fruitware\QiwiServiceProvider\Model\Request\AbstractRequest;

/**
 * Personal Account Refill Request
 */
abstract class PayRequest extends AbstractRequest implements PayRequestInterface
{
    /**
     * Payment registration date in OSMP system in YYYYMMDDHHMMSS format
     *
     * @var integer
     * @required
     */
    protected $txnDate;

    /**
     * Get response object
     *
     * @return PayResponseInterface
     */
    public function getResponse()
    {
        return new PayResponse();
    }

    /**
     * @param int $txnDate
     *
     * @return $this
     */
    public function setTxnDate($txnDate)
    {
        $this->txnDate = $txnDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getTxnDate()
    {
        return $this->txnDate;
    }

    /**
     * @param array $params from $_GET parameters
     *
     * @return PayRequestInterface
     */
    public function handleRequest(array $params)
    {
        return $this
            ->setTxnId($params['txn_id'])
            ->setAccount($params['account'])
            ->setSum($params['sum'])
            ->setTxnDate($params['txn_date'])
        ;
    }
}
