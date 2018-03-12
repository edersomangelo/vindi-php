<?php

namespace Vindi;

class Customer extends Resource
{
    public function __construct($key = null, $uri = null)
    {
        parent::__construct($key, $uri);
    }

    /**
     * The endpoint that will hit the API.
     *
     * @return string
     */
    public function endpoint()
    {
        return 'customers';
    }
}
