<?php

namespace Fruitware\QiwiServiceProvider\Model\Request;

use Fruitware\QiwiServiceProvider\Model\Response\ResponseInterface;

/**
 * Common fields and methods Interface
 */
interface RequestInterface
{
    /**
     * @param array $params from $_GET parameters
     *
     * @return RequestInterface
     */
    public function handleRequest(array $params);

    /**
     * Internal logic processing
     *
     * @return ResponseInterface
     */
    public function process();

    /**
     * @param int $txnId
     *
     * @return $this
     */
    public function setTxnId($txnId);

    /**
     * @return int
     */
    public function getTxnId();

    /**
     * @param int $account
     *
     * @return $this
     */
    public function setAccount($account);

    /**
     * @return int
     */
    public function getAccount();

    /**
     * @param float $sum
     *
     * @return $this
     */
    public function setSum($sum);

    /**
     * @return float
     */
    public function getSum();
}