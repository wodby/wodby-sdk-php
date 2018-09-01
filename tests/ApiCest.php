<?php

class ApiCest
{
    /**
     * @param ApiTester $I
     * @throws \Wodby\Api\ApiException
     */
    public function getUserOrgs(ApiTester $I)
    {
        $I->getOrgs();
    }
}