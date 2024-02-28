<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'availability_date',
    ];

    //protected $fillable = ['name', 'title', 'description', 'image', 'availability_date'];

}
