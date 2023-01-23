<?php

namespace App\Models;

use App\Enums\PriceTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'price_type' => PriceTypeEnum::class
    ];

    protected $fillable = [
        'description',
        'title',
        'category_id',
        'price',
        'price_type',
    ];

    public function postImage()
    {
        return $this->hasMany(PostImage::class, 'post_id', 'id');
    }
}
