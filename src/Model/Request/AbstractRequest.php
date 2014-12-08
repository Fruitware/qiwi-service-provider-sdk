<?php

namespace Fruitware\QiwiServiceProvider\Model\Request;

use Fruitware\QiwiServiceProvider\Model\Response\ResponseInterface;

/**
 * Common fields and methods
 */
abstract class AbstractRequest implements RequestInterface
{
    /**
     * Internal payment number in OSMP system
     *
     * @var int
     * @required
     */
    protected $txnId;

    /**
     * Subscribers’ identifier in providers information system
     *
     * @var int
     * @required
     */
    protected $account;

    /**
     * Amount to be transferred to subscribers personal account
     *
     * @var float
     * @required
     */
    protected $sum;

    /**
     * @param array $params from $_GET parameters
     *
     * @return RequestInterface
     */
    abstract public function handleRequest(array $params);

    /**
     * Get response object
     *
     * @return ResponseInterface
     */
    abstract public function getResponse();

    /**
     * Internal logic processing
     *
     * @return ResponseInterface
     */
    abstract public function process();

    /**
     * @param int $txnId
     *
     * @return $this
     */
    public function setTxnId($txnId)
    {
        $this->txnId = $txnId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTxnId()
    {
        return $this->txnId;
    }

    /**
     * @param int $account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @return int
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param int $sum
     *
     * @return $this
     */
    public function setSum($sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }
}
