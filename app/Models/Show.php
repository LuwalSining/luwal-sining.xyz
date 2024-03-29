<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'logline',
        'credits',
        'poster',
        'slug',
        'status',
        'watch_code'
    ];

    protected function media() {
        $this->hasMany(Media::class);
    }
}
