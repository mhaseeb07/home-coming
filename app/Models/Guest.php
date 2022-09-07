<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name', 'cnic', 'contact_number','relation','position','amount','pass_id','voucher_image','vaccination_certificate','vaccination_status','user_id','seat_id','created_by','updated_by'
    ];
    //Relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function guestDoc(){
        return $this->hasMany(GuestDoc::class,'guest_id');
    }
    public function guestAttendance(){
        return $this->hasMany(GuestAttendance::class,'guest_id');
    }
    public function seat(){
        return $this->belongsTo(Seat::class,'seat_id');
    }
}
