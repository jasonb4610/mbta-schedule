<?php
/**
 * Created by PhpStorm.
 * User: jasonb
 * Date: 6/6/18
 * Time: 11:48 AM
 */

namespace App\Helpers\MbtaApi;


class Schedule extends BaseRequest
{

    protected $_resource = 'schedules';

    public function request($method, $params = array(), $filters = array())
    {
        return parent::request('get', $params, $filters);
    }
}
