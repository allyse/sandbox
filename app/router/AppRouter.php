<?php

use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Klein\ServiceProvider;

class AppRouter extends Router
{

    /**
     * @param Klein $klein
     */
    public function create (Klein $klein)
    {
        $klein->respond('GET', '/', function ($request, $response, $service, $app) use ($klein) {
            $app->call->IndexController()->index();
        });
    }
}