<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPersonalDetail extends Model
{
    public function indexTable(){
        return $this->belongsTo(IndexTable::class);
    }
}
