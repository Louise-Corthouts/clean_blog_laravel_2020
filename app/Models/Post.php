<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Post;

class Post extends Model
{
    use HasFactory;
    public function author() {
      return $this->belongsTo('App\Models\Author', 'author_id', 'id');
    }
}
