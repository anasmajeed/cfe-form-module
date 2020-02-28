<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactoryDetail extends Model
{
    public function indexTable(){
        return $this->belongsTo(IndexTable::class);
    }
}
