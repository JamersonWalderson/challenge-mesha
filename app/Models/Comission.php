<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Doctor;

class Comission extends Model
{
    use HasFactory;

    function getDoctorIdAttribute($value)
    {
        $doctor = new Doctor;
        $doctor = Doctor::find($value);

        return $this->attributes['doctor_id'] = $doctor->name;
    }

    function doctor()
    {
        return $this->BelongsTo(Doctor::class);
    }
}
