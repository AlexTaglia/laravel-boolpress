<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'img',
        'category_id'
    ];

    //Dove c'è la foreign key "belongsTo"
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
