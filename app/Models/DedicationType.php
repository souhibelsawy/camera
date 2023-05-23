<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DedicationType extends Model
{
    use HasFactory;

    protected $fillable = ['model_id', 'name', 'description'];

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function dedicationDetails()
    {
        return $this->hasMany(DedicationDetail::class);
    }
}
