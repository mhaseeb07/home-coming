<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Eligibles extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reg_no', 'name', 'cnic','email','contact_no_residence','cell_no','degree_name','passout_session','passout_year', 'student_id_erp', 'campus_id','father_name','father_cnic', 'address',
        'name_of_institution','designation','voucher_image','status','amount','pass_id','vaccination_certificate','vaccination_status','eligible_type_id','medal_id','seat_id','session_id','user_id','created_by','updated_by', 'remark'
    ];
    //Relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function session(){
        return $this->belongsTo(ConvocationSession::class,'session_id');
    }
    public function eligibleType(){
        return $this->belongsTo(EligibleType::class,'eligible_type_id');
    }
    public function seat(){
        return $this->belongsTo(Seat::class,'seat_id');
    }
    public function medal(){
        return $this->belongsTo(Medal::class,'medal_id');
    }
}
