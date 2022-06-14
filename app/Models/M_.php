<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_ extends Model
{
    use HasFactory;
    protected $table = 'm_';

    protected $fillable = [
        'type',
        'prefix',
        'suffix',
        'file_extension',
        'file_name',
        'wbs_id'
    ];
}
