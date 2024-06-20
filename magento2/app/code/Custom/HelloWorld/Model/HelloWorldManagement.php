<?php

namespace Custom\HelloWorld\Model;

use Custom\HelloWorld\Api\HelloWorldManagementInterface;

class HelloWorldManagement implements HelloWorldManagementInterface
{
    /**
     * {@inheritdoc}
     */
    public function getHelloWorldMessage()
    {
        return "Hello, World! This is my first Magento 2 API!";
    }
}
