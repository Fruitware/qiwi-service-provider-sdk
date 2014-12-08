<?php

namespace Fruitware\QiwiServiceProvider\Model\Response;

/**
 * Result codes list
 *
 * Provider should compare all errors appearing in application during the request processing
 * according to list shown below and return corresponding codes in <result> element.
 * If there is “+” mark in severity column – it shows how this error will be interpreted by system.
 */
class ResultCode
{
    /**
     * ;-)
     */
    const OK = 0;

    /**
     * Temporary error. Please repeat your request later
     */
    const TEMPORARY_ERROR = 1;

    /**
     * Wrong subscribers identifier format
     * @severity FATAL
     */
    const WRONG_SUBSCRIBERS_IDENTIFIER_FORMAT = 4;

    /**
     * The subscribers ID is not found (Wrong number)
     * @severity FATAL
     */
    const WRONG_ACCOUNT_NUMBER = 5;

    /**
     * Payment accepting forbidden by provider
     * @severity FATAL
     */
    const FORBIDDEN_BY_PROVIDER = 7;

    /**
     * Payment accepting forbidden because of technical problems
     * @severity FATAL
     */
    const TECHNICAL_PROBLEM = 8;

    /**
     * Subscribers account is not active
     * @severity FATAL
     */
    const ACCOUNT_IS_NOT_ACTIVE = 79;

    /**
     * Payments processing is not finished
     */
    const PAYMENTS_PROCESSING_IS_NOT_FINISHED = 90;

    /**
     * The amount is too small
     * @severity FATAL
     */
    const THE_AMOUNT_IS_TOO_SMALL = 241;

    /**
     * The amount is too large
     * @severity FATAL
     */
    const THE_AMOUNT_IS_TOO_LARGE = 242;

    /**
     * Impossible to check accounts status
     * @severity FATAL
     */
    const IMPOSSIBLE_TO_CHECK_ACCOUNTS_STATUS = 243;

    /**
     * Other providers error
     * @severity FATAL
     */
    const OTHER_ERROR = 300;
}