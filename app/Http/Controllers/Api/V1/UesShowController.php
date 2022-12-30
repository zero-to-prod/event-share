<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Ue;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UesShowController extends Controller
{
    /**
     * @see UesShowTest
     */
    public function __invoke(Request $request, string $id): JsonResponse
    {
        return response()->json(Ue::findOrFail($id));
    }
}
