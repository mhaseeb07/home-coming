<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regalia extends Model
{
    protected $fillable = [
        'name', 'amount','description','session_id','created_by','updated_by'
    ];
    //Relations
    public function session(){
        return $this->belongsTo(ConvocationSession::class,'session_id');
    }
    public function ledger(){
        return $this->hasMany(UserLedger::class,'regalia_id');
    }
}
