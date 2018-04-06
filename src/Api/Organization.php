<?php declare (strict_types=1);

namespace Wodby\Api;

class Organization extends ApiAbstract
{
    /**
     * @param string $id
     * @return \Wodby\Api\Entity\Organization
     * @throws \Wodby\Api\Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function load($id)
    {
        $response = $this->makeRequest(self::METHOD_GET, "orgs/$id");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return new Entity\Organization($data);
    }

    /**
     * @return array
     * @throws \Wodby\Api\Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadAll()
    {
        $response = $this->makeRequest(self::METHOD_GET, 'orgs');
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);
        $orgs = [];

        foreach ($data as $item) {
            $orgs[] = new Entity\Organization($item);
        }

        return $orgs;
    }
}
