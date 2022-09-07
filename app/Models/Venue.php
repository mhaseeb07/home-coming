<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
        'title', 'description','time','date','address','session_id','created_by','updated_by'
    ];
    //Relations
    public function session(){
        return $this->belongsTo(ConvocationSession::class,'session_id');
    }
    public function seat(){
        return $this->hasMany(Seat::class,'venue_id');
    }
    public function campus(){
        return $this->belongsTo(Campus::class,'campus_id');
    }
}
