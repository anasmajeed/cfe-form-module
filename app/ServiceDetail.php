<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    public function indexTable(){
        return $this->belongsTo(IndexTable::class);
    }
}
