<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DedicationDetail extends Model
{
    use HasFactory;

    protected $fillable = ['dedication_id', 'dedication_type_id', 'detail'];

    public function dedication()
    {
        return $this->belongsTo(Dedication::class);
    }

    public function dedicationType()
    {
        return $this->belongsTo(DedicationType::class);
    }
}
