<?php

namespace Tests\Api\V1;

use App\Models\Ue;
use App\Routing\ApiV1Routes;
use Tests\ApiV1TestCase;

class UesCreateTest extends ApiV1TestCase
{
    /**
     * @test
     * @see UesCreateController::__invoke
     */
    public function create(): void
    {
        $time = now()->toIso8601String();

        $data = [
            Ue::name => 'name',
            Ue::time => $time,
            Ue::time_end => $time,
            Ue::location => 'location',
            Ue::description => 'description',
        ];

        $this->postRoute(ApiV1Routes::ues, $data)
            ->assertOk()
            ->assertJson($data);
    }
}
