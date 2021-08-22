<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Doctor;

class Speciality extends Model
{
    use HasFactory;

    /**
     * Mutator que converte o valor de doctor_id para o nome do doutor
     */
    function getDoctorIdAttribute($value)
    {
        $doctor = new Doctor;
        $doctor = Doctor::find($value);

        return $this->attributes['doctor_id'] = $doctor->name;
    }

    function doctor()
    {
        return $this->belongTo(Doctor::class);
    }
}
