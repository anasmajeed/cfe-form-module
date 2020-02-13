<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkerFamilyMemberDetail extends Model
{
    public function IndexTable(){
        return $this->belongsTo(workerFamilyMemberDetail::class);
    }
}
