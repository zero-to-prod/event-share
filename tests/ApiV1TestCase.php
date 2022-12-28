<?php

namespace Tests;

use App\Routing\ApiV1Routes;
use Illuminate\Testing\TestResponse;

class ApiV1TestCase extends ApiTestCase
{

    protected function getRoute(ApiV1Routes $route, array $headers = []): TestResponse
    {
        return $this->get(route($route->name), $headers);
    }

    protected function postRoute(ApiV1Routes $route, array $data = [], array $headers = []): TestResponse
    {
        return $this->post(route($route->name), $data, $headers);
    }
}
