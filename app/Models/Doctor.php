<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'likes',
        'specialization',
        'address',
        'hospital',
        'image_path',
        'accepted',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(DoctorComment::class);
    }
    public function likes(): HasMany
    {
        return $this->hasMany(DoctorLike::class);
    }
}
