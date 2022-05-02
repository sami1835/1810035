<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor1 extends Model
{
    protected $fillable = [
        'patient_name', 'age', 'date', 'doctor_name'
    ];
}
