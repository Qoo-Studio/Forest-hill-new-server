<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UnitController extends Controller
{
    public function store(Request $request)
    {
        $inputs = $request->all();
        
        $validator = Validator::make($inputs, [
            'name'           => ['required', 'string', 'unique:units'],
            'category_id'    => ['required', 'integer'],
            'image_url'      => ['mimes:jpg,bmp,png'],
            'file_url'       => ['mimes:jpg,bmp,png,pdf,xlsx'],
            'space'          => ['required', 'integer'],
            'bedroom_count'  => ['required', 'integer'],
            'bathroom_count' => ['required', 'integer'],
            'floor_number'   => ['required', 'integer'],
            'price'          => ['required', 'integer'],
            'has_parking'    => ['required', 'boolean'],
            'is_sunny'       => ['required', 'boolean'],
            'sold'           => ['required', 'boolean'],
            'is_public'      => ['required', 'boolean'],
            'exposure'       => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data'   => $validator->errors(),
                'status' => 'fail'
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $unit = Unit::create($inputs);

        return response()->json([
            'data' => $unit,
            'message' => 'Successfully Created',
            'status' => 'success'
        ]);
    }
}
