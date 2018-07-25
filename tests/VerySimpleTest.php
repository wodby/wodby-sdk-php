<?php

class VerySimpleTest extends \Codeception\Test\Unit
{
    public function testSomeFeature()
    {
        $this->expectException(\Wodby\Api\ApiException::class);

        $config = \Wodby\Api\Configuration::getDefaultConfiguration()
            ->setHost('example.com')
            ->setApiKey('X-API-KEY', 'YOUR_API_KEY');

        $userApi = new \Wodby\Api\Client\UserApi(new GuzzleHttp\Client(['timeout' => 1]), $config);
        /** @noinspection PhpUnhandledExceptionInspection */
        $userApi->getAuthenticatedUser();
    }
}