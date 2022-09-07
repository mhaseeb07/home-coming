<?php

namespace App;

use App\Models\Campus;
use App\Models\ConvocationSession;
use App\Models\Eligibles;
use App\Models\Guest;
use App\Models\GuestAttendance;
use App\Models\Medal;
use App\Models\UserAttendance;
use App\Models\UserDoc;
use App\Models\UserLedger;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','position','email','reg_no','role_status','status','m_login_token',
        'm_pass_reset_request','m_pass_reset_otp','last_login','m_last_login','email_verified_at','password','created_by','updated_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relations
    public function campus(){
        return $this->hasMany(Campus::class,'created_by');
    }
    public function session(){
        return $this->hasMany(ConvocationSession::class,'created_by');
    }
    public function eligible(){
        return $this->hasMany(Eligibles::class,'user_id');
    }
    public function guest(){
        return $this->hasMany(Guest::class,'user_id');
    }
    public function userAttendance(){
        return $this->hasMany(UserAttendance::class,'user_id');
    }
    public function userDoc(){
        return $this->hasMany(UserDoc::class,'user_id');
    }
    public function ledger(){
        return $this->hasMany(UserLedger::class,'user_id');
    }
    public function medal(){
        return $this->hasMany(Medal::class,'created_by');
    }
    public function eligibleType(){
        return $this->hasMany(EligibleType::class,'created_by');
    }
    public function seat(){
        return $this->hasMany(Seat::class,'created_by');
    }
}
