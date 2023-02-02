<?php

namespace App\Http\Controllers\Api\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePurchaserRequest;
use App\Http\Resources\PurchaserResource;
use App\Models\Purchaser;

class PurchaserController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/v1/purchaser",
     *     operationId="storePurchaser",
     *     tags={"Purchaser"},
     *     @OA\Parameter(
     *      name="first_name",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="last_name",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="birth_date",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="sin",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="government_id",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="expiry_date",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="phone_number",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="integer", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="city_id",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="integer", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="country",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="suite",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="address",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="postal_code",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="integer", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="profession",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *      type="string", 
     *   ),
     * ),
     *     @OA\Parameter(
     *      name="avatar",
     *      required=false,
     *      in="query",
     *      @OA\Schema(
     *      type="text", 
     *   ),
     * ),
     *  @OA\Parameter(
     *      name="about",
     *      required=false,
     *      in="query",
     *      @OA\Schema(
     *      type="text", 
     *   ),
     * ),
     *     @OA\Response(
     *         response="200",
     *         description="purchaser saved!",
     *     ),
     *     @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *     ),
     *     @OA\Response(
     *         response="503",
     *         description="Your parameters is not correct",
     *     ),
     *     @OA\Response(
     *         response="422",
     *         description="validation error",
     *     ),
     * )
     */
    public function store(StorePurchaserRequest $request)
    {
        try {
            $inputs = $request->all();
            $validated = $request->validated();
            $purchaser = Purchaser::create($inputs);
            return new PurchaserResource($purchaser);
        } catch (\Throwable $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'status' => 'error'
            ]);
        }
    }
}
