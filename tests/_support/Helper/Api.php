<?php

namespace Helper;

use GuzzleHttp\Client;
use Wodby\Api\Client\OrganizationApi;
use Wodby\Api\Configuration;

class Api extends \Codeception\Module
{
    /**
     * @var array
     */
    protected $requiredFields = ['api_endpoint', 'api_key'];

    /**
     * @return array
     * @throws \Wodby\Api\ApiException
     */
    public function getOrgs(): array
    {
        $configuration = new Configuration();
        $configuration->setHost($this->_getConfig('api_endpoint'));
        $configuration->setApiKey('X-API-KEY', $this->_getConfig('api_key'));
        $orgApi = new OrganizationApi(new Client(), $configuration);

        return $orgApi->getOrgs();
    }
}