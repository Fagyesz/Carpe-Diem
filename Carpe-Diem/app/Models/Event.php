<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'start_time', 'end_time', 'location', 'organizer', 'ticket_price', 'tickets_available' ];

    public function scopeFilter($query, array $filters)
    {
            if($filters['tag'] ?? false)
            {
                $query -> where('tags', 'like', '%' . request('tag') . '%');
            }

            if($filters['search'] ?? false)
            {
                $query -> where('title', 'like', '%' . request('search') . '%')
                    -> orWhere('description', 'like', '%' . request('search') . '%')
                    -> orWhere('tags', 'like', '%' . request('search') . '%')
                    -> orWhere('price', 'like', '%' . request('search') . '%')
                    ;
            }
    }
}
