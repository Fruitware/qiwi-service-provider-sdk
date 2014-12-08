<?php

namespace Fruitware\QiwiServiceProvider\Model\Method\Check;

use Fruitware\QiwiServiceProvider\Model\Response\AbstractResponse;

/**
 * Subscribers’ Account Status Check and Payment Registration Response
 */
class CheckResponse extends AbstractResponse implements CheckResponseInterface
{
    /**
     * @return \SimpleXMLElement
     */
    public function xml()
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><response/>');
        $xml->addChild('osmp_txn_id', $this->getOsmpTxnId());
        $xml->addChild('result', $this->getResult());
        $xml->addChild('comment', $this->getComment());

        return $xml;
    }
}
