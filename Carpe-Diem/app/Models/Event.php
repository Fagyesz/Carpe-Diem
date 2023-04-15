<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_time',
        'end_time',
        'location',
        'organizer_id',
        'ticket_price',
        'tickets_available',
        'event_image'

    ];

    public function scopeFilter($query, array $filters)
    {
            if($filters['search'] ?? false)
            {
                $query -> where('title', 'like', '%' . request('search') . '%')
                    -> orWhere('description', 'like', '%' . request('search') . '%')
                    -> orWhere('ticket_price', 'like', '%' . request('search') . '%')
                    -> orWhere('location', 'like', '%' . request('search') . '%')
                    -> orWhere('start_time', 'like', '%' . request('search') . '%')


                    ;
            }
    }

    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function scopeWithUser($query)
    {
        return $query->with('organizer');
    }

    public function scopeWithComments($query)
    {
        return $query->with(['comments' => function ($query) {
            $query->with('user');
        }]);
    }
}
