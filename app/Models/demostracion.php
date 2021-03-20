<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demostracion extends Model
{
    #use HasFactory;
    protected $table = 'demostracion';
    protected $fillable = ['nombre','edad','peso'];
    
}
