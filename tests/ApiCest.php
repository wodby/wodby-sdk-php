<?php

class ApiCest
{
    /**
     * @param ApiTester $I
     * @throws \Wodby\Api\ApiException
     */
    public function tryApi(ApiTester $I)
    {
        $I->getOrgs();
    }
}