<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 10/3/16
 * Time: 3:33 PM
 */

namespace Wodby\Api;


use \GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

abstract class ApiAbstract {

  const BASE_URI = 'https://api.wodby.com/api/v2/';
  const METHOD_GET = 'get';
  const METHOD_POST = 'post';
  const METHOD_PUT = 'put';
  const METHOD_DELETE = 'delete';
  const CONNECT_TIMEOUT = 10;
  const REQUEST_TIMEOUT = 30;

  /**
   * @var string
   */
  private $accessToken;

  /**
   * @var Client
   */
  private $httpClient;

  /**
   * @return string
   */
  protected function getAccessToken() {
    return $this->accessToken;
  }

  /**
   * @return \GuzzleHttp\Client
   */
  protected function getHttpClient() {
    return $this->httpClient;
  }

  protected function makeRequest($method, $uri, array $options = []) {
    $options = array_merge_recursive([
      RequestOptions::CONNECT_TIMEOUT => self::CONNECT_TIMEOUT,
      RequestOptions::TIMEOUT => self::REQUEST_TIMEOUT,
      RequestOptions::HEADERS => [
        'Accept' => 'application/json',
        'Authorization' => 'token ' . $this->getAccessToken(),
      ],
    ], $options);

    return $this->getHttpClient()
      ->request($method, self::BASE_URI . $uri, $options);
  }

  /**
   * ApiAbstract constructor.
   * @param $accessToken
   * @param \GuzzleHttp\Client $client
   */
  public function __construct($accessToken, Client $client) {
    $this->accessToken = $accessToken;
    $this->httpClient = $client;
  }
}
