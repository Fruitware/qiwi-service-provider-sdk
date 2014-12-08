<?php

namespace Fruitware\QiwiServiceProvider\Model\Response;

/**
 * Response Interface
 */
interface ResponseInterface
{
    /**
     * @return \SimpleXMLElement
     */
    public function xml();

    /**
     * @param int $osmpTxnId
     *
     * @return $this
     */
    public function setOsmpTxnId($osmpTxnId);

    /**
     * @return int
     */
    public function getOsmpTxnId();

    /**
     * @param int $result
     *
     * @return $this
     */
    public function setResult($result);

    /**
     * @return int
     */
    public function getResult();

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment);

    /**
     * @return string
     */
    public function getComment();
}