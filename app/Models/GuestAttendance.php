<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestAttendance extends Model
{
    protected $fillable = [
        'in_out','position','guest_id','created_by',
    ];
    //Relations
    public function guest(){
        return $this->belongsTo(Guest::class,'guest_id');
    }
}
