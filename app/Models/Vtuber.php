<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vtuber extends Model
{
    protected $table = 'vtubers';
    protected $fillable = ['name', 'self_introduction', 'image'];
}
