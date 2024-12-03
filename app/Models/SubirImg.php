<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubirImg extends Model
{
    protected $table = 'images'; 

    protected $fillable = ['original_name', 'stored_name', 'path'];
}