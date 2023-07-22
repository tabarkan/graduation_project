<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diseases extends Model
{
    use HasFactory;
    protected $fillable = [
        'disease_name',
        'disease_category',
        'treatment',
        'protection',
        'symptoms',
    ];
}
