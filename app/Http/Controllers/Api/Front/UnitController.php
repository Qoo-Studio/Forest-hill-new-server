<?php

namespace App\Http\Controllers\Api\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\UnitResource;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
     /**
     * @OA\Get(
     *      path="/api/v1/units",
     *      operationId="getUnitList",
     *      tags={"Units"},
     *      summary="Get list of units",
     *      description="Returns list of units",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          
     *       ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */

    public function index()
    {
        try {
            return UnitResource::collection(Unit::paginate(10));
        } catch (\Throwable $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'status' => 'error'
            ]);
        }
    }
}
