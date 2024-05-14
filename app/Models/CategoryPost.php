<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;

    protected $table = 'category_posts'; //connect manually to table
    protected $fillable = ['category_id', 'post_id']; //accepts data  from an array
    public $timestamps = false;

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
