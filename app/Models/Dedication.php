<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dedication extends Model
{
    use HasFactory;

    protected $fillable = ['camera_id', 'image'];

    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }

    public function dedicationDetails()
    {
        return $this->hasMany(DedicationDetail::class);
    }
}
