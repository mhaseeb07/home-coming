<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = [
        'venue_id','seat_no','description','created_by','updated_by'
    ];
    //Relations
    public function venue(){
        return $this->belongsTo(Venue::class,'venue_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function eligible(){
        return $this->hasOne(Eligibles::class,'seat_id');
    }
    public function guest(){
        return $this->hasOne(Guest::class,'seat_id');
    }
}
