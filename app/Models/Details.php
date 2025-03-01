<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    /** @use HasFactory<\Database\Factories\DetailsFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'state',
        'lga',
        'town',
        'school',
        'class',
        'date',
        'parent_name',
        'father_number',
        'mother_number',
        'personal_number',
        'sacraments',
        'sacred_liturgy',
        'personal_liturgy',
        'obey_executive',
        'occupation',
        'address',
        'agreement',
    ];

}