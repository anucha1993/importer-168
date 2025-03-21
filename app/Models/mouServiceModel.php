<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mouServiceModel extends Model
{
    use HasFactory;
    protected $table = 'mou_services';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'image_path',
        'details',
        'nationality',
        'period',
        'content',
        'flag',
    ];
}
