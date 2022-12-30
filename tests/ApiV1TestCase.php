<?php

namespace Tests;

use App\Routing\ApiV1Routes;
use Illuminate\Testing\TestResponse;

class ApiV1TestCase extends ApiTestCase
{

    protected function getRoute(
        ApiV1Routes $route,
        $parameters = [],
        array $headers = []
    ): TestResponse {
        return $this->get(route($route->name, $parameters), $headers);
    }

    protected function postRoute(
        ApiV1Routes $route,
        array $data = [],
        $parameters = [],
        array $headers = []
    ): TestResponse {
        return $this->post(route($route->name, $parameters), $data, $headers);
    }
}
