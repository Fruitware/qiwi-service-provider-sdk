<?php

namespace Fruitware\QiwiServiceProvider\Model\Response;

/**
 * Common fields between methods
 */
abstract class AbstractResponse implements ResponseInterface
{
    /**
     * Transaction number in system, transferred to provider in txn_id variable
     *
     * @var int
     * @required
     */
    protected $osmpTxnId;

    /**
     * Request completion code
     *
     * @var int
     * @default 0 = OK
     * @required
     */
    protected $result = 0;

    /**
     * Operation completion comment
     *
     * @var string
     * @optional
     */
    protected $comment = '';

    /**
     * @return \SimpleXMLElement
     */
    abstract public function xml();

    /**
     * @param int $osmpTxnId
     *
     * @return $this
     */
    public function setOsmpTxnId($osmpTxnId)
    {
        $this->osmpTxnId = $osmpTxnId;

        return $this;
    }

    /**
     * @return int
     */
    public function getOsmpTxnId()
    {
        return $this->osmpTxnId;
    }

    /**
     * @param int $result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
