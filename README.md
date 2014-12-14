QIWI service provider connection interface
========================

# Requirements

- php >= 5.3
- ext-SimpleXML

# Install

## Composer

    {
        "require": {
            "fruitware/qiwi-service-provider-sdk": "dev-master"
        },
    }

# Create custom command classes

## Create your CheckCommand class

```php

<?php

namespace Acme\QiwiServiceProvider\Command;

use Fruitware\QiwiServiceProvider\Model\Method\Check\CheckRequest;
use Fruitware\QiwiServiceProvider\Model\Method\Check\CheckResponse;

class CheckCommand extends CheckRequest
{
    /**
     * Internal logic processing
     *
     * @return CheckResponse
     */
    public function process()
    {
        // some your logic here
    
        /**
         * @var CheckResponse $response
         */
        $response = $this->getResponse();

        return $response
            ->setOsmpTxnId($this->getTxnId()) // required
            ->setResult(0) // required
            ->setComment('some Check comment') // not required
        ;
    }
}

```

## Create your PayCommand class

```php

<?php

namespace Acme\QiwiServiceProvider\Command;

use Fruitware\QiwiServiceProvider\Model\Method\Pay\PayRequest;
use Fruitware\QiwiServiceProvider\Model\Method\Pay\PayResponse;

class PayCommand extends PayRequest
{
    /**
     * Internal logic processing
     *
     * @return PayResponse
     */
    public function process()
    {
        // some your logic here
    
        /**
         * @var PayResponse $response
         */
        $response = $this->getResponse();

        return $response
            ->setOsmpTxnId($this->getTxnId()) // required
            ->setPrvTxn(123) // required
            ->setSum($this->getSum()) // required
            ->setResult(0) // required
            ->setComment('some pay comment') // not required
        ;
    }
}

```

# Usage

In your controller

```php

<?php

/**
 * Get ips from the contract!
 */
$validIps = array(
    '127.0.0.1', // for the test gate interface
//    '127.0.0.2', // for the production gate interface
);

$service = new \Fruitware\QiwiServiceProvider\Service($validIps, [
    'check' => 'Acme\QiwiServiceProvider\Command\CheckCommand',
    'pay' => 'Acme\QiwiServiceProvider\Command\PayCommand',
]);

/**
 * @var \Fruitware\QiwiServiceProvider\Model\Request\RequestInterface $method
 */
$method = $service->handleRequest($_GET);
$xmlResponseString = $method->process()->xml()->asXML();

echo $xmlResponseString;

```
