<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexTable extends Model
{
    public function workerFamilyMemberDetail(){
        return $this->hasMany(WorkerFamilyMemberDetail::class);
    }

    public function workerPersonalDetail(){
        return $this->hasOne(WorkerPersonalDetail::class);
    }
}
