<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
class Image extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'event_id'
    ];

    public function events(){
        return $this->belongsTo(Event::class);
    }
}
