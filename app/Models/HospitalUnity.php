<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HospitalUnity extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'hospital_unities';

    protected $fillable = [
        'cnes',
        'health_facility_code',
        'cnpj',
        'name',
        'corporate_name',
        'unit_type_code',
        'management_type',
        'administrative_sphere',
        'legal_nature_code',
        'zip_code',
        'address',
        'address_number',
        'neighborhood',
        'city_ibge_code',
        'state_code',
        'latitude',
        'longitude',
        'phone',
        'email',
        'attendance_shift_code',
        'attendance_shift',
        'has_sus_ambulatory_care',
        'has_surgical_center',
        'has_obstetric_center',
        'has_neonatal_center',
        'has_hospital_care',
        'has_support_services',
        'has_ambulatory_care',
        'datasus_updated_at',
    ];

    /**
     * Conversão de tipos de atributos.
     */
    protected $casts = [
        'has_sus_ambulatory_care' => 'boolean',
        'has_surgical_center' => 'boolean',
        'has_obstetric_center' => 'boolean',
        'has_neonatal_center' => 'boolean',
        'has_hospital_care' => 'boolean',
        'has_support_services' => 'boolean',
        'has_ambulatory_care' => 'boolean',
        'datasus_updated_at' => 'date',
        'latitude' => 'double',
        'longitude' => 'double',
    ];
}