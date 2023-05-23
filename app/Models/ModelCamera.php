<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCamera extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function cameras()
    {
        return $this->belongsToMany(Camera::class);
    }

    public function dedicationTypes()
    {
        return $this->hasMany(DedicationType::class);
    }
}
