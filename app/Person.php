<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'persons';


    protected $fillable = [
        'name',
        'surname',
        'numbers',
        'description',
    ];

}
