<?php

namespace App\Helpers\MbtaApi;

class Routes extends BaseRequest
{

    protected $_resource = 'routes';

    public function request($method, $params = array(), $filters = array())
    {
        return parent::request('get', $params, $filters);
    }
}
