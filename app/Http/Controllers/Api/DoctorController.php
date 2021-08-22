<?php

namespace App\Http\Controllers\Api;

use App\Models\Doctor;
use App\Http\Resources\DoctorCollection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function index()
    {
        $doctor = Doctor::All();
        return DoctorCollection::collection($doctor);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $doctor = new Doctor;
        $doctor->name = $request->input('name');
        
        if($doctor->save()){
            return new DoctorCollection($doctor);

        }
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request)
    {
        $doctor = Doctor::find($request->id);
        $doctor->name = $request->input('name');
        
        if($doctor->save()){
            return new DoctorCollection($doctor);
            
        }
    }


    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        if ($doctor->delete()){
            return new DoctorCollection($doctor);

        }
    }
}
