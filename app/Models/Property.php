<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProperyType;

class Property extends Model
{
    //
    protected $guarded = [];

    public function type(){
        return $this->belongsTo(ProperyType::class,'ptype_id','id');
    }
}
