<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comission;
use App\Http\Resources\ComissionResource;
use Illuminate\Http\Request;

class ComissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comission = Comission::All();
        return ComissionResource::collection($comission);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $comission = new Comission;
        $comission->doctor_id = $request->input('doctor_id');
        $comission->comission = $request->input('comission');

        if($comission->save()){
            return new ComissionResource($comission);

        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $comission = Comission::find($id);
        return new ComissionResource($comission);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request)
    {
        $comission = Comission::find($request->id);
        $comission->doctor_id = $request->input('doctor_id');
        $comission->comission = $request->input('comission');
        
        if($comission->save()){
            return new ComissionResource($comission);
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $comission = Comission::find($id);
        if ($comission->delete()){
            return new ComissionResource($comission);

        }
    }
}
