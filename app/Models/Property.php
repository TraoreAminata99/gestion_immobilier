<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';
    protected $fillable = [
        'name',
        'description',
        'address',
        'image',
        'price_per_night'
    ];

    public $timestamps = false;
}
