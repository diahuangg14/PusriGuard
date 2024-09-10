<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pusri extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'code_id',
        'practice_code',
        'activities',
        'evidence',
        'attachment',
        'date',
    ];
}
