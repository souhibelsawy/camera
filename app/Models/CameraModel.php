<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CameraModel extends Model
{
    use HasFactory;

    protected $fillable = ['camera_id', 'model_id'];

    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }

    public function model()
    {
        return $this->belongsTo(Model::class);
    }
}
