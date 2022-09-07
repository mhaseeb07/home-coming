<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MedalListCategory;
use App\Models\ConvocationSession;

class MedalList extends Model
{
    protected $table = 'medal_list';
    protected $fillable = [
        'title','slug','medal_cate','description','status','session_id','created_by','updated_by'
    ];

    public function MLCate(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(MedalListCategory::class, 'medal_cate');
    }
    public function SCate(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ConvocationSession::class, 'session_id');
    }
}
