<?php
namespace Custom\HelloWorld\Api;

interface HelloWorldManagementInterface
{
    /**
     * Get Hello World message.
     *
     * @api
     * @return string
     */
    public function getHelloWorldMessage();
}
