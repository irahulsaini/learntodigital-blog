<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    protected $fillable = [
        'title','slug','excerpt','content','featured_image',
        'category_id','status','publish_at','meta'
    ];

    protected $casts = [
        'status' => 'boolean',
        'publish_at' => 'datetime',
        'meta' => 'array',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    // scope for published
    public function scopePublished(Builder $q) {
        return $q->where('status', true)
                 ->where(function($s){
                     $s->whereNull('publish_at')->orWhere('publish_at','<=',now());
                 });
    }

    // auto-generate slug if empty
    protected static function booted() {
        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}
