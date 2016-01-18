<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
      'user_id',
      'title',
      'content',
      'image_url',
      'is_private'
    ];
}
