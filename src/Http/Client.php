<?php

namespace Vindi\Http;

use GuzzleHttp\Client as Guzzle;
use Vindi\Vindi;

class Client extends Guzzle
{
    /**
     * Client constructor.
     */
    public function __construct(array $config = [], $apiKey = null, $apiUri = null)
    {
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';

        $config = array_merge([
            'base_uri' => ($apiUri != null ? $apiUri : Vindi::getApiUri()),
            'auth' => [($apiKey != null ? $apiKey : Vindi::getApiKey()), '', 'BASIC'],
            'headers' => [
                'Content-Type' => 'application/json',
                'User-Agent' => trim('Vindi-PHP/' . Vindi::$sdkVersion . "; {$host}"),
            ],
            'verify' => Vindi::getCertPath(),
            'timeout' => Vindi::getApiTimeOut(),
            'curl.options' => [
                'CURLOPT_SSLVERSION' => 'CURL_SSLVERSION_TLSv1_2',
            ]
        ], $config);


        parent::__construct($config);
    }
}
