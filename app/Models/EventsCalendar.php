<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsCalendar extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start_datetime', 
        'end_datetime', 
        'event_id', 
        'user_id'
    ];
}
