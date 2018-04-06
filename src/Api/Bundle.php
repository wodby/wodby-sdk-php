<?php declare (strict_types=1);

namespace Wodby\Api;

class Bundle extends ApiAbstract
{
    /**
     * @param string $name
     * @return \Wodby\Api\Entity\Bundle
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadByName($name)
    {
        $response = $this->makeRequest(self::METHOD_GET, "bundles/$name");
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);

        return new Entity\Bundle($data);
    }

    /**
     * @return array
     * @throws Exception\UnexpectedStatusCode
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadAll()
    {
        $response = $this->makeRequest(self::METHOD_GET, 'bundles');
        $this->checkStatusCode($response->getStatusCode(), 200);
        $data = json_decode($response->getBody()->getContents(), true);
        $bundles = [];

        foreach ($data as $item) {
            $bundles[] = new Entity\Bundle($item);
        }

        return $bundles;
    }
}
