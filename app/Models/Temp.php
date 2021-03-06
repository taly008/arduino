<?php

namespace App\Models;

use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'datatime' => 'datetime:Y-m-d H:i'
    ];

    protected $fillable = [
        'dom',
        'ulica',
        'teplica',
    ];
}
