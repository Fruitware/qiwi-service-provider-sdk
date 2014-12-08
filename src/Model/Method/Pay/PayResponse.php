<?php

namespace Fruitware\QiwiServiceProvider\Model\Method\Pay;

use Fruitware\QiwiServiceProvider\Model\Method\Check\CheckResponseInterface;
use Fruitware\QiwiServiceProvider\Model\Response\AbstractResponse;

/**
 * Personal Account Refill Response
 */
class PayResponse extends AbstractResponse implements CheckResponseInterface
{
    /**
     * Amount to be transferred to subscribers personal account
     * Fractional number with an accuracy up to 2 digits after the decimal point, the point («.») is used as a separation symbol.
     * If the amount is an integer number, anyway it’s extended with point and zeroes, e.g. «152.00»
     *
     * @var float
     * @required
     */
    protected $sum;

    /**
     * Subscribers’ balance update operation unique number (in providers base)
     *
     * @var int number up to 20 digits
     * @required
     */
    protected $prvTxn;

    /**
     * @param float $sum
     *
     * @return $this
     */
    public function setSum($sum)
    {
        $this->sum = (float)$sum;

        return $this;
    }

    /**
     * @return float
     */
    public function getSum()
    {
        return number_format($this->sum, 2, '.', '');
    }

    /**
     * @param int $prvTxn
     *
     * @return $this
     */
    public function setPrvTxn($prvTxn)
    {
        $this->prvTxn = $prvTxn;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrvTxn()
    {
        return $this->prvTxn;
    }

    /**
     * @return \SimpleXMLElement
     */
    public function xml()
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><response/>');
        $xml->addChild('osmp_txn_id', $this->getOsmpTxnId());
        $xml->addChild('prv_txn', $this->getPrvTxn());
        $xml->addChild('sum', $this->getSum());
        $xml->addChild('result', $this->getResult());
        $xml->addChild('comment', $this->getComment());

        return $xml;
    }
}
