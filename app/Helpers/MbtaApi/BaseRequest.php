<?php

namespace App\Helpers\MbtaApi;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

abstract class BaseRequest
{
    // Base API URI of MBTA's version 3 API
    const BASE_REQUEST_URI = 'https://api-v3.mbta.com';

    protected $_resource;

    public function request($method, $params = array(), $filters = array())
    {
        $client = new Client();
        $requestUri = self::BASE_REQUEST_URI;
        if (strlen($this->_resource) > 0) {
            $requestUri .= '/' . $this->_resource;
        }
        $filterString = '';
        if (count($filters) > 0) {
            $filterString = '?filter';
            foreach ($filters as $k => $v) {
                $filterString .= $k . '=' . $v;
            }
            $requestUri .= $filterString;
        }

        $ch = curl_init($requestUri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        return $result;
    }
}
