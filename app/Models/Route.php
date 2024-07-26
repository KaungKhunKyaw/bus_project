<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = ['bus_id', 'name'];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function stops()
    {
        return $this->hasMany(Stop::class);
    }
}
