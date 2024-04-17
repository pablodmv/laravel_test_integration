<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imgLocation extends Model
{
    protected $fillable = ['location', 'url', 'description', 'category', 'tags'];
}
