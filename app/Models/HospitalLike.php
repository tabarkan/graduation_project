<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalLike extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'hospital_id',
    ];

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
