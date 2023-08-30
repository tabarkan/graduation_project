<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorFav extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
