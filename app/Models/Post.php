<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;

class Post extends EloquentModel
{
    use HasFactory, HasApiTokens;
    protected $fillable=['user_id','title','content'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
