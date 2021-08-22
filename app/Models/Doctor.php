<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Speciality;

class Doctor extends Model
{
    use HasFactory;

    function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
