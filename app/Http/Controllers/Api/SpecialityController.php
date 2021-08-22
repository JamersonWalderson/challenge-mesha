<?php

namespace App\Http\Controllers\Api;

use App\Models\Speciality;
use App\Http\Resources\SpecialityResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speciality = Speciality::All();
        return SpecialityResource::collection($speciality);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $speciality = new Speciality;
        $speciality->name = $request->input('name');
        
        if($speciality->save()){
            return new SpecialityResource($speciality);

        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $speciality = Speciality::find($id);
        return new SpecialityResource($speciality);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request)
    {
        $speciality = Speciality::find($request->id);
        $speciality->name = $request->input('name');
        
        if($speciality->save()){
            return new SpecialityResource($speciality);
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $speciality = Speciality::find($id);
        if ($speciality->delete()){
            return new SpecialityResource($speciality);

        }
    }
}
