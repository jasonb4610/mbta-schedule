<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Helpers\MbtaApi;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showRoutes() {
        // Execute API call to retrieve all route information
        $helper = new MbtaApi\Routes();
        $response = $helper->request('get');
        $responseData = json_decode($response->getBody());

        // Iterate through route data and group routes
        $routeData = array();
        foreach($responseData->data as $route) {
            $routeData[$route->attributes->type][] = $route;
        }

        // Send responseData to the view to build out the tables
        return view('welcome', array('routeData' => $routeData));

    }
    public function showSchedule($request)
    {
        // Execute API call to retrieve route information
        $helper = new MbtaApi\Schedule();
        $response = $helper->request('get', array(), array('[route]' => $request));
        $responseData = json_decode($response->getBody());

        // Send responseData to the view to build out schedule table
        return view('schedule', array('scheduleData' => $responseData));
    }
}
