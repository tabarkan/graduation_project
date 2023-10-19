<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'contact_email',
        'contact_number',
        'website',
        'governorate',
        'region',
        'street',
        'image_path',
        'accepted',
        'likes',
    ];
    public function comments(): HasMany
    {
        return $this->hasMany(HospitalComment::class);
    }
    public function likes(): HasMany
    {
        return $this->hasMany(HospitalLike::class);
    }
}
