<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    use HasFactory;

    protected $fillable = ['location', 'brand'];

    public function models()
    {
        return $this->belongsToMany(Model::class);
    }

    public function dedications()
    {
        return $this->hasMany(Dedication::class);
    }
}
