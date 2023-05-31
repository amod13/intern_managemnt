<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'provience',
        'district',
        'muncipilaty',
        'tole',
        'ward',
        'phoneno',
        'citizenship_no',
        'email_address',
        'driving_license',
        'college_name',
        'location',
        'start_year',
        'completion_year',
        'major',
        'gname',
        'grelation',
        'gaddress',
        'gphoneno',
        'gsignature',
        'rname',
        'rposition',
        'rcollegecompany',
        'rphoneno',
        'rsignature',
        'signature',
        'ppsizephoto',
    ];
}
