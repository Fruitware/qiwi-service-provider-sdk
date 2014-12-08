<?php

namespace Fruitware\QiwiServiceProvider\Model\Method\Pay;

use Fruitware\QiwiServiceProvider\Model\Response\ResponseInterface;

/**
 * Subscribers’ Account Status Pay and Payment Registration Response Interface
 */
interface PayResponseInterface extends ResponseInterface
{
    /**
     * @param int $sum
     *
     * @return $this
     */
    public function setSum($sum);

    /**
     * @return float
     */
    public function getSum();

    /**
     * @param int $prvTxn
     *
     * @return $this
     */
    public function setPrvTxn($prvTxn);

    /**
     * @return int
     */
    public function getPrvTxn();
}
