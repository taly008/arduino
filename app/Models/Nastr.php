<?php

namespace App\Models;

use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Nastr extends Authenticatable

{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'dom',
        'ulica',
        'teplica',
    ];
}
