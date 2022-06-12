<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wbs extends Model
{
    use HasFactory;
    protected $table = 'wbs';

    protected $fillable = [
        'site_id',
        'site_name',
        'project_budget',
        'regional',
        'site_type',
        'survey_date',
        'consultant',
        'cons_pic_name',
        'tower',
        'tower_height',
    ];
}
