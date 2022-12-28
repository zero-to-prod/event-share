<?php

namespace Tests\Api\V1;

use App\Routing\ApiV1Routes;
use Tests\ApiV1TestCase;

class PingTest extends ApiV1TestCase
{
    /** @test */
    public function ping(): void
    {
        $this->getRoute(ApiV1Routes::ping)->assertStatus(200);
    }
}
