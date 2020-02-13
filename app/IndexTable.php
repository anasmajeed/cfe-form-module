<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexTable extends Model
{
    public function WorkerFamilyMemberDetail(){
        return $this->hasMany(WorkerFamilyMemberDetail::class);
    }
}
