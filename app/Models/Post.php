<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;

class Post extends EloquentModel
{
    use HasFactory;
    protected $fillable=['title','content'];
}
