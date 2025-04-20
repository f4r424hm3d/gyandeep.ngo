<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  use HasFactory;

  public function getCategory()
  {
    return $this->hasOne(BlogCategory::class, 'id', 'category_id');
  }
  public function getAuthor()
  {
    return $this->hasOne(User::class, 'id', 'author_id');
  }
  // public function faqs()
  // {
  //   return $this->hasMany(BlogFaq::class, 'blog_id');
  // }
  // public function contents()
  // {
  //   return $this->hasMany(BlogContent::class, 'blog_id');
  // }
}
