<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    use HasFactory;
    protected $table = 'article_images';
    protected $primaryKey = 'id';
    protected $fillable = ['article_id', 'image_path','image_name	'];
    // สร้างความสัมพันธ์กับ Article
 
    
}
