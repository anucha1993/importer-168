<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ArticleImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'image_path',
        'category_id',
        'created_at',
        'updated_at'
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}

public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }


}


