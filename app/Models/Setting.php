<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $casts = [
        'datatime' => 'datetime:Y-m-d H:i'
    ];

    protected $fillable = [
        'dom',
        'ulica',
        'teplica',
    ];
}
