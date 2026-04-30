<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'cns',
        'file_cns_id',
        'document_type',
        'document',
        'file_document_id',
        'sigadoc',
        'birth_date',
        'gender',
        'newborn',
        'race',
        'ethnicity',
        'marital_status',
        'mother_name',
        'father_name',
        'naturalness',
        'phone',
        'cell_phone',
        'email',
        'profession',
        'deficiency',
        'file_deficiency_id',
        'cep',
        'address',
        'file_address_id',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state',
    ];
    
}
