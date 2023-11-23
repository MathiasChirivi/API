<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['cate_id', 'city_id', 'sub_cate_id', 'author_id', 'title', 'url_slugs', 'cover',
        'video_url', 'content', 'short_descriptions', 'likes', 'comments', 'share_content', 'translations',
        'seo_tags', 'extra_field', 'status', 'coordinates', 'live_url', 'main_characters'];

    protected $casts = [
        'main_characters' => 'array', // 'main_characters' come un array
    ];
}
