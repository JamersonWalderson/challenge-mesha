<?php

namespace App\Http\Controllers\Api;

use App\Models\Doctor;
use App\Http\Resources\DoctorCollection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctor = Doctor::All();
        return DoctorCollection::collection($doctor);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $doctor = new Doctor;
        $doctor->name = $request->input('name');
        
        if($doctor->save()){
            return new DoctorCollection($doctor);

        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $doctor = Doctor::find($id);
        return new DoctorCollection($doctor);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request)
    {
        $doctor = Doctor::find($request->id);
        $doctor->name = $request->input('name');
        
        if($doctor->save()){
            return new DoctorCollection($doctor);
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        if ($doctor->delete()){
            return new DoctorCollection($doctor);

        }
    }
}
