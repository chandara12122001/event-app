<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_date',
        'description',
        'no_of_seats',
        'price',
        'user_id',
        'location_id',
        'title',
        'going',
        'interested'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id')->withTimestamps()->withPivot(['isOrganizer']);
    }

    public function organizer(){
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id')->withTimestamps()->withPivot(['isOrganizer'])->wherePivot('isOrganizer', true);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function scopeSearch($query, $term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('title', 'like', $term)
                    ->orWhere('description', 'like', $term);
        });
    }
}
