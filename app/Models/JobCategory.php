<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;

    protected $with = [
        'category'
    ];

    protected $fillable = [
        'job',
        'category_id',
        'job_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }



}
