<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'size',
        'location_id',
        'email',
        'website',
        'description'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
