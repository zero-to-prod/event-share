<?php

namespace Tests\Api\V1;

use App\Models\Ue;
use App\Routing\ApiV1Routes;
use Tests\ApiV1TestCase;

class UesShowTest extends ApiV1TestCase
{
    /**
     * @test
     * @see UesShowController::__invoke
     */
    public function show(): void
    {
        $ue = Ue::factory()->create();

        $this->getRoute(ApiV1Routes::ues_show, [Ue::id => $ue->id])
            ->assertOk()
            ->assertJson($ue->toArray());
    }

    /**
     * @test
     * @see UesShowController::__invoke
     */
    public function throws_error_when_id_is_not_found(): void
    {
        $this->getRoute(ApiV1Routes::ues_show, [Ue::id => 0])
            ->assertNotFound();
    }
}
