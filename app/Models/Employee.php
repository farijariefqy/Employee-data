<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $fillable = [
        'name',
        'nip',
        'nik',
        'place_of_birth',
        'date_of_birth',
        'date_accepted_work',
        'employee_status',
        'position',
        'department',
        'email',
        'telp',
        'address',
        'mariatal_status',
        'gender'
    ];
}
