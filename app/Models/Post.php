<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function categoryPost(){
        return $this->hasMany(CategoryPost::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
