<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'contact_email',
        'contact_number',
        'website',
        'address',
    ];
}