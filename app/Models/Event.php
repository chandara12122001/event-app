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
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
