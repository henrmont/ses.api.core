<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientCare extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'patient_id',
        'module_id',
        'is_valid',
        'user_id',
        'back_to_user',
        'is_archived'
    ];
    
}
