<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id', // Add category_id to fillable
        'title',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category() // Add this method for the relationship with Category model
    {
        return $this->belongsTo(Category::class);
    }

    public function tags() // Add this method for the relationship with Tag model
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    

    public function scopeWithUser($query)
    {
        return $query->with('user');
    }

    public function scopeWithComments($query)
    {
        return $query->with(['comments' => function ($query) {
            $query->with('user');
        }]);
    }

}
