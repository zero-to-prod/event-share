<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Ue;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UesCreateController extends Controller
{
    /**
     * @see UesCreateTest
     */
    public function __invoke(Request $request): JsonResponse
    {
        $attributes = [
            Ue::name,
            Ue::time,
            Ue::time_end,
            Ue::location,
            Ue::description
        ];

        $validated = $request->validate(Ue::validate($attributes));

        return response()->json(Ue::create($validated));
    }
}
