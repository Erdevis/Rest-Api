<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Modelpeople;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\requestpeople;

class controllerpeople extends Controller

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $people=Modelpeople::all();
    //     return response(resourcepeople::collection($people),200);
    // }

   


{
    public function index(): JsonResponse
    {
        return response()->json(Modelpeople::all(), 200);
    }

    public function create(requestpeople $request): JsonResponse
    {
        $people = Modelpeople::create($request->all());

        return response()->json($people, 201);
    }

    public function read(Modelpeople $people): JsonResponse
    {
        return response()->json($people, 200);
    }

    public function update(Request $request, Modelpeople $people): JsonResponse
    {
        $people->update($request->all());

        return response()->json($people, 200);
    }

    public function delete(Modelpeople $people): JsonResponse
    {
        $people->delete();

        return response()->json(null, 204);
    }
}