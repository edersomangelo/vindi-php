<?php

namespace Vindi;

class Vindi
{

    /**
     * This Package SDK Version.
     *
     * @var string
     */
    public static $sdkVersion = '1.0.10';

    /**
     * The Environment variable name for API URI.
     *
     * @var string
     */
    public static $apiUriEnvVar = 'VINDI_API_URI';

    /**
     * The Environment variable name for API Key.
     *
     * @var string
     */
    public static $apiKeyEnvVar = 'VINDI_API_KEY';
    public static $baseApiEnvVar = 'VINDI_API_BASE';

    /**
     * The Environment variable name for API Time Out.
     *
     * @var string
     */
    public static $apiTimeOutEnvVar = 'VINDI_API_TIME_OUT';

    /**
     * Get Vindi API URI from environment.
     *
     * @return string
     */
    public static function getApiUri()
    {
        if (empty(getenv(static::$apiUriEnvVar))) {
            return 'https://app.vindi.com.br/api/v1/';
        }
        return getenv(static::$apiUriEnvVar);
    }

    /**
     * Get Vindi API Key from environment.
     *
     * @return string
     */
    public static function getApiKey()
    {
        return getenv(static::$apiKeyEnvVar);
    }
    public static function getApiBase()
    {
        return getenv(static::$baseApiEnvVar);
    }
    /**
     * Get Vindi API Time Out from environment.
     *
     * @return string
     */
    public static function getApiTimeOut()
    {
        if (empty(getenv(static::$apiTimeOutEnvVar))) {
            return 60;
        }
        return getenv(static::$apiTimeOutEnvVar);
    }

    /**
     * Get CA Bundle Path.
     *
     * @return string
     */
    public static function getCertPath()
    {
        return realpath(sprintf('%s/%s', dirname(__FILE__), '/../data/ssl/ca-bundle.crt'));
    }
}
